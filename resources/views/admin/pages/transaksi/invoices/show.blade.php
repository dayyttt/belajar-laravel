@extends('layouts.admin')

@section('title', 'Detail Invoice')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Invoice #{{ $invoice->invoice_number }}</h3>
                    <div class="card-tools">
                        @if($invoice->status != 'paid')
                        <a href="{{ route('admin.pages.transaksi.invoices.edit', $invoice) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        @endif
                        @if($invoice->status == 'draft')
                        <form method="POST" action="{{ route('admin.pages.transaksi.invoices.send', $invoice) }}" class="d-inline">
                            @csrf
                            <button type="submit" class="btn btn-info btn-sm">
                                <i class="fas fa-paper-plane"></i> Kirim
                            </button>
                        </form>
                        @endif
                        <a href="{{ route('admin.pages.transaksi.invoices.index') }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h4>Informasi Invoice</h4>
                            <table class="table table-borderless">
                                <tr>
                                    <td><strong>No. Invoice:</strong></td>
                                    <td>{{ $invoice->invoice_number }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Tanggal:</strong></td>
                                    <td>{{ $invoice->invoice_date->format('d/m/Y') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Jatuh Tempo:</strong></td>
                                    <td>{{ $invoice->due_date ? $invoice->due_date->format('d/m/Y') : '-' }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Status:</strong></td>
                                    <td>
                                        <span class="badge badge-{{ $invoice->status_color }}">
                                            {{ $invoice->status_label }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Status Pembayaran:</strong></td>
                                    <td>
                                        <span class="badge badge-{{ $invoice->payment_status_color }}">
                                            {{ $invoice->payment_status_label }}
                                        </span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h4>Informasi Pelanggan</h4>
                            <table class="table table-borderless">
                                <tr>
                                    <td><strong>Nama:</strong></td>
                                    <td>{{ $invoice->customer_name }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Email:</strong></td>
                                    <td>{{ $invoice->customer_email ?: '-' }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Telepon:</strong></td>
                                    <td>{{ $invoice->customer_phone ?: '-' }}</td>
                                </tr>
                                @if($invoice->booking)
                                <tr>
                                    <td><strong>Booking:</strong></td>
                                    <td>{{ $invoice->booking->customer_name }} - {{ $invoice->booking->booking_date->format('d/m/Y') }}</td>
                                </tr>
                                @endif
                            </table>
                        </div>
                    </div>

                    <hr>

                    <h4>Rincian Pembayaran</h4>
                    <div class="row">
                        <div class="col-md-6">
                            <table class="table">
                                <tr>
                                    <td>Subtotal</td>
                                    <td class="text-right">Rp {{ number_format($invoice->subtotal, 0, ',', '.') }}</td>
                                </tr>
                                @if($invoice->additional_fee > 0)
                                <tr>
                                    <td>Biaya Tambahan</td>
                                    <td class="text-right">Rp {{ number_format($invoice->additional_fee, 0, ',', '.') }}</td>
                                </tr>
                                @endif
                                @if($invoice->discount > 0)
                                <tr>
                                    <td>Diskon</td>
                                    <td class="text-right text-danger">-Rp {{ number_format($invoice->discount, 0, ',', '.') }}</td>
                                </tr>
                                @endif
                                @if($invoice->tax > 0)
                                <tr>
                                    <td>Pajak</td>
                                    <td class="text-right">Rp {{ number_format($invoice->tax, 0, ',', '.') }}</td>
                                </tr>
                                @endif
                                <tr class="font-weight-bold">
                                    <td>Total</td>
                                    <td class="text-right">Rp {{ number_format($invoice->total_amount, 0, ',', '.') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <table class="table">
                                <tr>
                                    <td>Total Tagihan</td>
                                    <td class="text-right">{{ $invoice->formatted_total_amount }}</td>
                                </tr>
                                <tr>
                                    <td>Sudah Dibayar</td>
                                    <td class="text-right text-success">{{ $invoice->formatted_paid_amount }}</td>
                                </tr>
                                <tr class="font-weight-bold">
                                    <td>Sisa Tagihan</td>
                                    <td class="text-right {{ $invoice->remaining_amount > 0 ? 'text-danger' : 'text-success' }}">
                                        {{ $invoice->formatted_remaining_amount }}
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    @if($invoice->notes || $invoice->terms_conditions)
                    <hr>
                    @if($invoice->notes)
                    <div class="row">
                        <div class="col-12">
                            <h4>Catatan</h4>
                            <p>{{ $invoice->notes }}</p>
                        </div>
                    </div>
                    @endif
                    @if($invoice->terms_conditions)
                    <div class="row">
                        <div class="col-12">
                            <h4>Syarat & Ketentuan</h4>
                            <p>{{ $invoice->terms_conditions }}</p>
                        </div>
                    </div>
                    @endif
                    @endif

                    <hr>

                    <div class="row">
                        <div class="col-md-6">
                            <h4>Riwayat Pembayaran</h4>
                            @if($invoice->payments->count() > 0)
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Jumlah</th>
                                            <th>Metode</th>
                                            <th>Status</th>
                                            <th>PIC</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($invoice->payments as $payment)
                                        <tr>
                                            <td>{{ $payment->payment_date->format('d/m/Y') }}</td>
                                            <td>{{ $payment->formatted_amount }}</td>
                                            <td>{{ $payment->payment_method_label }}</td>
                                            <td>
                                                <span class="badge badge-{{ $payment->status == 'completed' ? 'success' : 'warning' }}">
                                                    {{ $payment->status == 'completed' ? 'Selesai' : 'Pending' }}
                                                </span>
                                            </td>
                                            <td>{{ $payment->processor->name ?? '-' }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            @else
                            <p class="text-muted">Belum ada pembayaran</p>
                            @endif
                        </div>
                        <div class="col-md-6">
                            <h4>Tambah Pembayaran</h4>
                            @if($invoice->payment_status != 'paid')
                            <a href="{{ route('admin.pages.transaksi.payments.create', ['invoice_id' => $invoice->id]) }}" 
                               class="btn btn-primary btn-sm">
                                <i class="fas fa-plus"></i> Tambah Pembayaran
                            </a>
                            @else
                            <p class="text-success">Invoice sudah lunas</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection