@extends('layouts.admin')

@section('title', 'Tambah Pembayaran')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Pembayaran</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.pages.transaksi.payments.index') }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    @if($invoice)
                    <div class="alert alert-info">
                        <strong>Invoice:</strong> {{ $invoice->invoice_number }} - {{ $invoice->customer_name }}<br>
                        <strong>Total Tagihan:</strong> {{ $invoice->formatted_total_amount }}<br>
                        <strong>Sisa Tagihan:</strong> {{ $invoice->formatted_remaining_amount }}
                    </div>
                    @endif

                    <form method="POST" action="{{ route('admin.pages.transaksi.payments.store') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Invoice <span class="text-danger">*</span></label>
                                    <select name="invoice_id" class="form-control" required id="invoiceSelect">
                                        <option value="">-- Pilih Invoice --</option>
                                        @foreach($invoices as $inv)
                                        <option value="{{ $inv->id }}" 
                                                {{ ($invoice && $invoice->id == $inv->id) ? 'selected' : '' }}
                                                data-remaining="{{ $inv->remaining_amount }}"
                                                data-customer="{{ $inv->customer_name }}">
                                            {{ $inv->invoice_number }} - {{ $inv->customer_name }} (Sisa: {{ $inv->formatted_remaining_amount }})
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Jumlah Pembayaran <span class="text-danger">*</span></label>
                                    <input type="number" name="amount" class="form-control" required
                                           value="{{ old('amount', $invoice? $invoice->remaining_amount : '') }}"
                                           min="1000" step="0.01" id="amount">
                                    <small class="form-text text-muted">Sisa tagihan: <span id="remainingAmount">Rp 0</span></small>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Pembayaran <span class="text-danger">*</span></label>
                                    <input type="date" name="payment_date" class="form-control" required
                                           value="{{ old('payment_date', now()->format('Y-m-d')) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Metode Pembayaran <span class="text-danger">*</span></label>
                                    <select name="payment_method" class="form-control" required id="paymentMethod">
                                        <option value="cash" {{ old('payment_method', 'cash') == 'cash' ? 'selected' : '' }}>Tunai</option>
                                        <option value="transfer" {{ old('payment_method') == 'transfer' ? 'selected' : '' }}>Transfer Bank</option>
                                        <option value="qris" {{ old('payment_method') == 'qris' ? 'selected' : '' }}>QRIS</option>
                                        <option value="other" {{ old('payment_method') == 'other' ? 'selected' : '' }}>Lainnya</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group" id="methodDetailGroup" style="display: none;">
                                    <label>Detail Metode <span class="text-danger">*</span></label>
                                    <input type="text" name="payment_method_detail" class="form-control"
                                           value="{{ old('payment_method_detail') }}"
                                           placeholder="Contoh: BCA, Mandiri, dll">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Bukti Pembayaran</label>
                                    <input type="file" name="proof_file" class="form-control" 
                                           accept=".jpg,.jpeg,.png,.pdf">
                                    <small class="form-text text-muted">Format: JPG, PNG, PDF (Max: 2MB)</small>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <textarea name="notes" class="form-control" rows="3">{{ old('notes') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan Pembayaran
                            </button>
                            <a href="{{ route('admin.pages.transaksi.payments.index') }}" class="btn btn-secondary">
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
