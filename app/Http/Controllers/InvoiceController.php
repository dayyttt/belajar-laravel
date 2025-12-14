<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Booking;
use App\Models\Customer;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class InvoiceController extends Controller
{
    public function index(Request $request)
    {
        $invoices = Invoice::with(['booking', 'customer', 'creator'])
                          ->when($request->status, function($q) use ($request) {
                              return $q->where('status', $request->status);
                          })
                          ->when($request->payment_status, function($q) use ($request) {
                              return $q->where('payment_status', $request->payment_status);
                          })
                          ->when($request->search, function($q) use ($request) {
                              return $q->where('invoice_number', 'like', "%{$request->search}%")
                                     ->orWhere('customer_name', 'like', "%{$request->search}%");
                          })
                          ->orderBy('created_at', 'desc')
                          ->paginate(20);

        return view('admin.invoices.index', compact('invoices'));
    }

    public function create()
    {
        $bookings = Booking::where('status', 'confirmed')->get();
        $customers = Customer::all();
        
        return view('admin.invoices.create', compact('bookings', 'customers'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'booking_id' => 'nullable|exists:bookings,id',
            'customer_id' => 'nullable|exists:customers,id',
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'nullable|email|max:255',
            'customer_phone' => 'nullable|string|max:20',
            'subtotal' => 'required|numeric|min:0',
            'additional_fee' => 'nullable|numeric|min:0',
            'discount' => 'nullable|numeric|min:0',
            'tax' => 'nullable|numeric|min:0',
            'invoice_date' => 'required|date',
            'due_date' => 'nullable|date|after_or_equal:invoice_date',
            'notes' => 'nullable|string',
            'terms_conditions' => 'nullable|string',
        ]);

        $data = $request->all();
        $data['total_amount'] = $request->subtotal + $request->additional_fee - $request->discount + $request->tax;
        $data['created_by'] = Auth::id();

        $invoice = Invoice::create($data);
        $invoice->generateInvoiceNumber();

        return redirect()
            ->route('admin.invoices.show', $invoice)
            ->with('success', 'Invoice berhasil dibuat');
    }

    public function show(Invoice $invoice)
    {
        $invoice->load(['booking', 'customer', 'payments.processor', 'creator']);
        
        return view('admin.invoices.show', compact('invoice'));
    }

    public function edit(Invoice $invoice)
    {
        if ($invoice->status === 'paid') {
            return back()->with('error', 'Invoice yang sudah lunas tidak dapat diedit');
        }

        $bookings = Booking::where('status', 'confirmed')->get();
        $customers = Customer::all();
        
        return view('admin.invoices.edit', compact('invoice', 'bookings', 'customers'));
    }

    public function update(Request $request, Invoice $invoice)
    {
        if ($invoice->status === 'paid') {
            return back()->with('error', 'Invoice yang sudah lunas tidak dapat diedit');
        }

        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'nullable|email|max:255',
            'customer_phone' => 'nullable|string|max:20',
            'subtotal' => 'required|numeric|min:0',
            'additional_fee' => 'nullable|numeric|min:0',
            'discount' => 'nullable|numeric|min:0',
            'tax' => 'nullable|numeric|min:0',
            'invoice_date' => 'required|date',
            'due_date' => 'nullable|date|after_or_equal:invoice_date',
            'notes' => 'nullable|string',
            'terms_conditions' => 'nullable|string',
        ]);

        $data = $request->all();
        $data['total_amount'] = $request->subtotal + $request->additional_fee - $request->discount + $request->tax;

        $invoice->update($data);

        return redirect()
            ->route('admin.invoices.show', $invoice)
            ->with('success', 'Invoice berhasil diperbarui');
    }

    public function destroy(Invoice $invoice)
    {
        if ($invoice->payments()->where('status', 'completed')->exists()) {
            return back()->with('error', 'Invoice dengan pembayaran tidak dapat dihapus');
        }

        $invoice->delete();

        return redirect()
            ->route('admin.invoices.index')
            ->with('success', 'Invoice berhasil dihapus');
    }

    public function sendInvoice(Invoice $invoice)
    {
        $invoice->update(['status' => 'sent']);
        
        // TODO: Implement email sending
        
        return back()->with('success', 'Invoice berhasil dikirim');
    }
}