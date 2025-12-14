@extends('layouts.admin')

@section('title', 'Invoice Baru')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Invoice Baru</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.pages.transaksi.invoices.index') }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.pages.transaksi.invoices.store') }}">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pilih Booking <small>(opsional)</small></label>
                                    <select name="booking_id" class="form-control" id="bookingSelect">
                                        <option value="">-- Pilih Booking --</option>
                                        @foreach($bookings as $booking)
                                        <option value="{{ $booking->id }}" 
                                                data-customer="{{ $booking->customer_name }}"
                                                data-email="{{ $booking->customer_email }}"
                                                data-phone="{{ $booking->customer_phone }}"
                                                data-amount="{{ $booking->total_amount }}">
                                            {{ $booking->customer_name }} - {{ $booking->booking_date->format('d/m/Y') }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Pilih Pelanggan <small>(jika tidak ada booking)</small></label>
                                    <select name="customer_id" class="form-control" id="customerSelect">
                                        <option value="">-- Pilih Pelanggan --</option>
                                        @foreach($customers as $customer)
                                        <option value="{{ $customer->id }}" 
                                                data-name="{{ $customer->name }}"
                                                data-email="{{ $customer->email }}"
                                                data-phone="{{ $customer->phone }}">
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
                                           value="{{ old('customer_name') }}" id="customerName">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="customer_email" class="form-control"
                                           value="{{ old('customer_email') }}" id="customerEmail">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Telepon</label>
                                    <input type="text" name="customer_phone" class="form-control"
                                           value="{{ old('customer_phone') }}" id="customerPhone">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Subtotal <span class="text-danger">*</span></label>
                                    <input type="number" name="subtotal" class="form-control" required
                                           value="{{ old('subtotal', 0) }}" min="0" step="0.01" id="subtotal">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Biaya Tambahan</label>
                                    <input type="number" name="additional_fee" class="form-control"
                                           value="{{ old('additional_fee', 0) }}" min="0" step="0.01" id="additionalFee">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Diskon</label>
                                    <input type="number" name="discount" class="form-control"
                                           value="{{ old('discount', 0) }}" min="0" step="0.01" id="discount">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Pajak</label>
                                    <input type="number" name="tax" class="form-control"
                                           value="{{ old('tax', 0) }}" min="0" step="0.01" id="tax">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Tanggal Invoice <span class="text-danger">*</span></label>
                                    <input type="date" name="invoice_date" class="form-control" required
                                           value="{{ old('invoice_date', now()->format('Y-m-d')) }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Jatuh Tempo</label>
                                    <input type="date" name="due_date" class="form-control"
                                           value="{{ old('due_date') }}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Total Amount</label>
                                    <input type="text" class="form-control" readonly
                                           value="Rp 0" id="totalAmount">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Catatan</label>
                                    <textarea name="notes" class="form-control" rows="3">{{ old('notes') }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Syarat & Ketentuan</label>
                                    <textarea name="terms_conditions" class="form-control" rows="3">{{ old('terms_conditions') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan Invoice
                            </button>
                            <a href="{{ route('admin.pages.transaksi.invoices.index') }}" class="btn btn-secondary">
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

@push('scripts')
<script>
$(document).ready(function() {
    function calculateTotal() {
        var subtotal = parseFloat($('#subtotal').val()) || 0;
        var additionalFee = parseFloat($('#additionalFee').val()) || 0;
        var discount = parseFloat($('#discount').val()) || 0;
        var tax = parseFloat($('#tax').val()) || 0;
        
        var total = subtotal + additionalFee - discount + tax;
        $('#totalAmount').val('Rp ' + total.toLocaleString('id-ID'));
    }

    $('#subtotal, #additionalFee, #discount, #tax').on('input', calculateTotal);

    $('#bookingSelect').on('change', function() {
        var selected = $(this).find(':selected');
        if (selected.val()) {
            $('#customerName').val(selected.data('customer'));
            $('#customerEmail').val(selected.data('email'));
            $('#customerPhone').val(selected.data('phone'));
            $('#subtotal').val(selected.data('amount'));
            calculateTotal();
        }
    });

    $('#customerSelect').on('change', function() {
        var selected = $(this).find(':selected');
        if (selected.val()) {
            $('#customerName').val(selected.data('name'));
            $('#customerEmail').val(selected.data('email'));
            $('#customerPhone').val(selected.data('phone'));
        }
    });
});
</script>
@endpush