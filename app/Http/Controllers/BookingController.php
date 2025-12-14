<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Booking;
use App\Models\BookingActivity;
use App\Models\Customer;
use App\Models\Service;
use App\Models\Slot;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class BookingController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(Request $request)
    {
        $query = Booking::with(['customer', 'service', 'serviceOwner', 'slot', 'createdBy'])
            ->orderBy('booking_date', 'desc')
            ->orderBy('start_time', 'desc');

        // Filter by status
        if ($request->filled('status')) {
            $query->byStatus($request->status);
        }

        // Filter by source
        if ($request->filled('source')) {
            $query->bySource($request->source);
        }

        // Filter by date
        if ($request->filled('date_from')) {
            $query->whereDate('booking_date', '>=', $request->date_from);
        }

        if ($request->filled('date_to')) {
            $query->whereDate('booking_date', '<=', $request->date_to);
        }

        // Filter by service owner
        if ($request->filled('service_owner_id')) {
            $query->where('service_owner_id', $request->service_owner_id);
        }

        $bookings = $query->paginate(25);
        $serviceOwners = User::where('role', 'service_owner')->get();

        return view('admin.pages.booking.index', compact('bookings', 'serviceOwners'));
    }

    public function create()
    {
        $customers = Customer::orderBy('name')->get();
        $services = Service::with('owner')->orderBy('name')->get();
        $serviceOwners = User::where('role', 'service_owner')->get();

        return view('admin.pages.booking.create', compact('customers', 'services', 'serviceOwners'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'customer_id' => 'nullable|exists:customers,id',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'service_id' => 'nullable|exists:services,id',
            'service_owner_id' => 'nullable|exists:users,id',
            'slot_id' => 'nullable|exists:slots,id',
            'booking_date' => 'required|date|after_or_equal:today',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'total_amount' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
            'customer_notes' => 'nullable|string',
            'internal_notes' => 'nullable|string',
            'source' => 'required|in:manual,whatsapp,phone,app,website',
        ]);

        DB::beginTransaction();
        try {
            $booking = Booking::create([
                'customer_id' => $validated['customer_id'],
                'customer_name' => $validated['customer_name'],
                'customer_email' => $validated['customer_email'],
                'customer_phone' => $validated['customer_phone'],
                'service_id' => $validated['service_id'],
                'service_owner_id' => $validated['service_owner_id'],
                'slot_id' => $validated['slot_id'],
                'booking_date' => $validated['booking_date'],
                'start_time' => $validated['start_time'],
                'end_time' => $validated['end_time'],
                'total_amount' => $validated['total_amount'],
                'notes' => $validated['notes'],
                'customer_notes' => $validated['customer_notes'],
                'internal_notes' => $validated['internal_notes'],
                'source' => $validated['source'],
                'status' => 'draft',
                'created_by' => Auth::id(),
            ]);

            // Log activity
            BookingActivity::create([
                'booking_id' => $booking->id,
                'user_id' => Auth::id(),
                'action' => 'created',
                'description' => 'Booking dibuat secara manual',
                'new_values' => $booking->toArray(),
            ]);

            DB::commit();

            return redirect()
                ->route('admin.pages.booking.show', $booking)
                ->with('success', 'Booking berhasil dibuat');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()
                ->withInput()
                ->with('error', 'Gagal membuat booking: ' . $e->getMessage());
        }
    }

    public function show(Booking $booking)
    {
        $booking->load(['customer', 'service', 'serviceOwner', 'slot', 'createdBy', 'activities.user']);
        return view('admin.pages.booking.show', compact('booking'));
    }

    public function edit(Booking $booking)
    {
        $customers = Customer::orderBy('name')->get();
        $services = Service::with('owner')->orderBy('name')->get();
        $serviceOwners = User::where('role', 'service_owner')->get();

        return view('admin.pages.booking.edit', compact('booking', 'customers', 'services', 'serviceOwners'));
    }

    public function update(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'customer_id' => 'nullable|exists:customers,id',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|string|max:20',
            'service_id' => 'nullable|exists:services,id',
            'service_owner_id' => 'nullable|exists:users,id',
            'slot_id' => 'nullable|exists:slots,id',
            'booking_date' => 'required|date|after_or_equal:today',
            'start_time' => 'required',
            'end_time' => 'required|after:start_time',
            'total_amount' => 'required|numeric|min:0',
            'notes' => 'nullable|string',
            'customer_notes' => 'nullable|string',
            'internal_notes' => 'nullable|string',
            'source' => 'required|in:manual,whatsapp,phone,app,website',
            'status' => 'required|in:draft,waiting_confirmation,confirmed,completed,cancelled',
        ]);

        DB::beginTransaction();
        try {
            $oldValues = $booking->toArray();
            
            $booking->update($validated);

            // Log activity
            BookingActivity::create([
                'booking_id' => $booking->id,
                'user_id' => Auth::id(),
                'action' => 'updated',
                'description' => 'Booking diupdate',
                'old_values' => $oldValues,
                'new_values' => $booking->fresh()->toArray(),
            ]);

            DB::commit();

            return redirect()
                ->route('admin.pages.booking.show', $booking)
                ->with('success', 'Booking berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()
                ->withInput()
                ->with('error', 'Gagal update booking: ' . $e->getMessage());
        }
    }

    public function updateStatus(Request $request, Booking $booking)
    {
        $validated = $request->validate([
            'status' => 'required|in:draft,waiting_confirmation,confirmed,completed,cancelled',
            'notes' => 'nullable|string',
        ]);

        DB::beginTransaction();
        try {
            $oldStatus = $booking->status;
            $booking->update([
                'status' => $validated['status'],
                'internal_notes' => $validated['notes'] ?? $booking->internal_notes,
            ]);

            // Log activity
            BookingActivity::create([
                'booking_id' => $booking->id,
                'user_id' => Auth::id(),
                'action' => 'status_changed',
                'description' => "Status diubah dari {$oldStatus} menjadi {$validated['status']}",
                'old_values' => ['status' => $oldStatus],
                'new_values' => ['status' => $validated['status']],
            ]);

            DB::commit();

            return back()->with('success', 'Status booking berhasil diupdate');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal update status: ' . $e->getMessage());
        }
    }

    public function destroy(Booking $booking)
    {
        DB::beginTransaction();
        try {
            // Log activity before delete
            BookingActivity::create([
                'booking_id' => $booking->id,
                'user_id' => Auth::id(),
                'action' => 'deleted',
                'description' => 'Booking dihapus',
                'old_values' => $booking->toArray(),
            ]);

            $booking->delete();
            DB::commit();

            return redirect()
                ->route('admin.pages.booking.index')
                ->with('success', 'Booking berhasil dihapus');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal hapus booking: ' . $e->getMessage());
        }
    }

    // API methods for dynamic loading
    public function getAvailableSlots(Request $request)
    {
        $date = $request->date;
        $serviceId = $request->service_id;

        $slots = Slot::whereDate('date', $date)
            ->where('service_id', $serviceId)
            ->where('is_available', true)
            ->where('booked_by', null)
            ->orderBy('start_time')
            ->get();

        return response()->json($slots);
    }

    public function getServicesByOwner($ownerId)
    {
        $services = Service::where('owner_id', $ownerId)
            ->orderBy('name')
            ->get(['id', 'name', 'price', 'duration']);

        return response()->json($services);
    }
}