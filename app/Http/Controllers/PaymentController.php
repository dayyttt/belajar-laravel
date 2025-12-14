<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\Invoice;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PaymentController extends Controller
{
    public function index(Request $request)
    {
        $payments = Payment::with(['invoice.customer', 'booking', 'processor'])
                          ->when($request->payment_method, function($q) use ($request) {
                              return $q->where('payment_method', $request->payment_method);
                          })
                          ->when($request->status, function($q) use ($request) {
                              return $q->where('status', $request->status);
                          })
                          ->when($request->date_from, function($q) use ($request) {
                              return $q->whereDate('payment_date', '>=', $request->date_from);
                          })
                          ->when($request->date_to, function($q) use ($request) {
                              return $q->whereDate('payment_date', '<=', $request->date_to);
                          })
                          ->orderBy('payment_date', 'desc')
                          ->paginate(20);

        return view('admin.payments.index', compact('payments'));
    }

    public function create(Request $request)
    {
        $invoice = null;
        if ($request->invoice_id) {
            $invoice = Invoice::findOrFail($request->invoice_id);
        }

        $invoices = Invoice::where('payment_status', '!=', 'paid')->get();
        
        return view('admin.payments.create', compact('invoices', 'invoice'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'invoice_id' => 'required|exists:invoices,id',
            'amount' => 'required|numeric|min:1000',
            'payment_date' => 'required|date',
            'payment_method' => 'required|in:cash,transfer,qris,other',
            'payment_method_detail' => 'required_if:payment_method,other|string|max:255',
            'notes' => 'nullable|string',
            'proof_file' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $invoice = Invoice::findOrFail($request->invoice_id);
        
        if ($request->amount > $invoice->remaining_amount) {
            return back()
                ->withInput()
                ->withErrors(['amount' => 'Jumlah pembayaran melebihi sisa tagihan']);
        }

        $data = $request->all();
        $data['processed_by'] = Auth::id();
        $data['status'] = 'completed'; // Auto complete for manual payments

        if ($request->hasFile('proof_file')) {
            $data['proof_file'] = $request->file('proof_file')->store('payment_proofs', 'public');
        }

        $payment = Payment::create($data);
        
        // Update invoice payment status
        $invoice->updatePaymentStatus();

        return redirect()
            ->route('admin.invoices.show', $invoice)
            ->with('success', 'Pembayaran berhasil dicatat');
    }

    public function edit(Payment $payment)
    {
        return view('admin.payments.edit', compact('payment'));
    }

    public function update(Request $request, Payment $payment)
    {
        $request->validate([
            'amount' => 'required|numeric|min:1000',
            'payment_date' => 'required|date',
            'payment_method' => 'required|in:cash,transfer,qris,other',
            'payment_method_detail' => 'required_if:payment_method,other|string|max:255',
            'notes' => 'nullable|string',
        ]);

        $payment->update($request->all());
        
        // Update invoice payment status
        $payment->invoice->updatePaymentStatus();

        return redirect()
            ->route('admin.invoices.show', $payment->invoice)
            ->with('success', 'Pembayaran berhasil diperbarui');
    }

    public function destroy(Payment $payment)
    {
        $invoice = $payment->invoice;
        
        $payment->delete();
        
        // Update invoice payment status
        $invoice->updatePaymentStatus();

        return redirect()
            ->route('admin.invoices.show', $invoice)
            ->with('success', 'Pembayaran berhasil dihapus');
    }

    public function verify(Payment $payment)
    {
        $payment->update(['status' => 'completed']);
        $payment->invoice->updatePaymentStatus();

        return back()->with('success', 'Pembayaran berhasil diverifikasi');
    }

    public function reject(Payment $payment, Request $request)
    {
        $request->validate(['reason' => 'required|string']);
        
        $payment->update([
            'status' => 'failed',
            'notes' => $request->reason
        ]);
        
        $payment->invoice->updatePaymentStatus();

        return back()->with('success', 'Pembayaran ditolak');
    }
}