<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\TimeSlot;
use Illuminate\Http\Request;

class TimeSlotController extends Controller
{
    public function index()
    {
        $timeSlots = TimeSlot::with(['schedule.service', 'schedule.serviceOwner', 'bookedBy'])
            ->orderBy('start_datetime', 'desc')
            ->paginate(50);
        
        return view('admin.pages.ketersediaan.time-slots.index', compact('timeSlots'));
    }

    public function edit(TimeSlot $timeSlot)
    {
        return view('admin.pages.ketersediaan.time-slots.edit', compact('timeSlot'));
    }

    public function update(Request $request, TimeSlot $timeSlot)
    {
        $validated = $request->validate([
            'status' => 'required|in:available,booked,confirmed,cancelled,blocked',
            'notes' => 'nullable|string',
            'price' => 'nullable|numeric|min:0'
        ]);

        $timeSlot->update($validated);

        return redirect()->route('admin.pages.ketersediaan.time-slots.index')
            ->with('success', 'Time slot berhasil diperbarui');
    }

    public function destroy(TimeSlot $timeSlot)
    {
        $timeSlot->delete();
        return redirect()->route('admin.pages.ketersediaan.time-slots.index')
            ->with('success', 'Time slot berhasil dihapus');
    }

    public function confirm(TimeSlot $timeSlot)
    {
        if ($timeSlot->status == 'booked') {
            $timeSlot->update(['status' => 'confirmed']);
            return redirect()->back()
                ->with('success', 'Booking berhasil dikonfirmasi');
        }

        return redirect()->back()
            ->with('error', 'Tidak dapat mengkonfirmasi slot ini');
    }

    public function cancel(TimeSlot $timeSlot)
    {
        if (in_array($timeSlot->status, ['booked', 'confirmed'])) {
            $timeSlot->update([
                'status' => 'cancelled',
                'booked_by' => null,
                'booking_reference' => null
            ]);
            return redirect()->back()
                ->with('success', 'Booking berhasil dibatalkan');
        }

        return redirect()->back()
            ->with('error', 'Tidak dapat membatalkan slot ini');
    }
}