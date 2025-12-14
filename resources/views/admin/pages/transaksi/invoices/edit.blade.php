@extends('layouts.admin')

@section('title', 'Edit Invoice')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Invoice #{{ $invoice->invoice_number }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.pages.transaksi.invoices.show', $invoice) }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.pages.transaksi.invoices.update', $invoice) }}">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pilih Booking <small>(opsional)</small></label>
                                    <select name="booking_id" class="form-control">
                                        <option value="">-- Pilih Booking --</option>
                                        @foreach($bookings as $booking)
                                        <option value="{{ $booking->id }}" {{ $invoice->booking_id == $booking->id ? 'selected' : '' }}>
                                            {{ $booking->customer_name }} - {{ $booking->booking_date->format('d/m/Y') }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pilih Pelanggan <small>(jika tidak ada booking)</small></label>
                                    <select name="customer_id" class="form-control">
                                        <option value="">-- Pilih Pelanggan --</option>
                                        @foreach($customers as $customer)
                                        <option value="{{ $customer->id }}" {{ $invoice->customer_id == $customer->id ? 'selected' : '' }}>
                                            {{ $customer->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Nama Pelanggan <span class="text-danger">*</span></label>
                                    <input type="text" name="customer_name" class="form-control" required
                                           value="{{ old('customer_name', $invoice->customer_name) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="customer_email" class="form-control"
                                           value="{{ old('customer_email', $invoice->customer_email) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Telepon</label>
                                    <input type="text" name="customer_phone" class="form-control"
                                           value="{{ old('customer_phone', $invoice->customer_phone) }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Subtotal <span class="text-danger">*</span></label>
                                    <input type="number" name="subtotal" class="form-control" required
                                           value="{{ old('subtotal', $invoice->subtotal) }}" min="0" step="0.01">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Biaya Tambahan</label>
                                    <input type="number" name="additional_fee" class="form-control"
                                           value="{{ old('additional_fee', $invoice->additional_fee) }}" min="0" step="0.01">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Diskon</label>
                                    <input type="number" name="discount" class="form-control"
                                           value="{{ old('discount', $invoice->discount) }}" min="0" step="0.01">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Pajak</label>
                                    <input type="number" name="tax" class="form-control"
                                           value="{{ old('tax', $invoice->tax) }}" min="0" step="0.01">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Invoice <span class="text-danger">*</span></label>
                                    <input type="date" name="invoice_date" class="form-control" required
                                           value="{{ old('invoice_date', $invoice->invoice_date->format('Y-m-d')) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Jatuh Tempo</label>
                                    <input type="date" name="due_date" class="form-control"
                                           value="{{ old('due_date', $invoice->due_date? $invoice->due_date->format('Y-m-d') : '') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Total</label>
                                    <input type="text" class="form-control" readonly
                                           value="Rp {{ number_format($invoice->total_amount, 0, ',', '.') }}">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <textarea name="notes" class="form-control" rows="3">{{ old('notes', $invoice->notes) }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Syarat & Ketentuan</label>
                                    <textarea name="terms_conditions" class="form-control" rows="3">{{ old('terms_conditions', $invoice->terms_conditions) }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Invoice
                            </button>
                            <a href="{{ route('admin.pages.transaksi.invoices.show', $invoice) }}" class="btn btn-secondary">
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