@extends('layouts.admin')

@section('title', 'Edit Pembayaran')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Pembayaran</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.pages.transaksi.invoices.show', $payment->invoice) }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.pages.transaksi.payments.update', $payment) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="alert alert-info">
                                    <strong>Invoice:</strong> {{ $payment->invoice->invoice_number }} - {{ $payment->invoice->customer_name }}<br>
                                    <strong>Total Tagihan:</strong> {{ $payment->invoice->formatted_total_amount }}<br>
                                    <strong>Sudah Dibayar:</strong> {{ $payment->invoice->formatted_paid_amount }}<br>
                                    <strong>Sisa Tagihan:</strong> {{ $payment->invoice->formatted_remaining_amount }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jumlah Pembayaran <span class="text-danger">*</span></label>
                                    <input type="number" name="amount" class="form-control" required
                                           value="{{ old('amount', $payment->amount) }}"
                                           min="1000" step="0.01">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Tanggal Pembayaran <span class="text-danger">*</span></label>
                                    <input type="date" name="payment_date" class="form-control" required
                                           value="{{ old('payment_date', $payment->payment_date->format('Y-m-d')) }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Metode Pembayaran <span class="text-danger">*</span></label>
                                    <select name="payment_method" class="form-control" required>
                                        <option value="cash" {{ old('payment_method', $payment->payment_method) == 'cash' ? 'selected' : '' }}>Tunai</option>
                                        <option value="transfer" {{ old('payment_method') == 'transfer' ? 'selected' : '' }}>Transfer Bank</option>
                                        <option value="qris" {{ old('payment_method') == 'qris' ? 'selected' : '' }}>QRIS</option>
                                        <option value="other" {{ old('payment_method') == 'other' ? 'selected' : '' }}>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Detail Metode</label>
                                    <input type="text" name="payment_method_detail" class="form-control"
                                           value="{{ old('payment_method_detail', $payment->payment_method_detail) }}"
                                           placeholder="Contoh: BCA, Mandiri, dll">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <textarea name="notes" class="form-control" rows="3">{{ old('notes', $payment->notes) }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Pembayaran
                            </button>
                            <a href="{{ route('admin.pages.transaksi.invoices.show', $payment->invoice) }}" class="btn btn-secondary">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection