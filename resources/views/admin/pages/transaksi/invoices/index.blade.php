@extends('layouts.admin')

@section('title', 'Daftar Invoice')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Invoice</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.pages.transaksi.invoices.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Invoice Baru
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="GET" class="mb-3">
                        <div class="row">
                            <div class="col-md-3">
                                <input type="text" name="search" class="form-control" 
                                       placeholder="Cari invoice/nama..." value="{{ request('search') }}">
                            </div>
                            <div class="col-md-2">
                                <select name="status" class="form-control">
                                    <option value="">Semua Status</option>
                                    <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="sent" {{ request('status') == 'sent' ? 'selected' : '' }}>Terkirim</option>
                                    <option value="partial" {{ request('status') == 'partial' ? 'selected' : '' }}>Sebagian</option>
                                    <option value="paid" {{ request('status') == 'paid' ? 'selected' : '' }}>Lunas</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select name="payment_status" class="form-control">
                                    <option value="">Semua Pembayaran</option>
                                    <option value="unpaid" {{ request('payment_status') == 'unpaid' ? 'selected' : '' }}>Belum Bayar</option>
                                    <option value="dp" {{ request('payment_status') == 'dp' ? 'selected' : '' }}>DP</option>
                                    <option value="paid" {{ request('payment_status') == 'paid' ? 'selected' : '' }}>Lunas</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-default">Filter</button>
                                <a href="{{ route('admin.pages.transaksi.invoices.index') }}" class="btn btn-secondary">Reset</a>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No. Invoice</th>
                                    <th>Pelanggan</th>
                                    <th>Total</th>
                                    <th>Status</th>
                                    <th>Pembayaran</th>
                                    <th>Tanggal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($invoices as $invoice)
                                <tr>
                                    <td>{{ $invoice->invoice_number }}</td>
                                    <td>{{ $invoice->customer_name }}</td>
                                    <td>Rp {{ number_format($invoice->total_amount, 0, ',', '.') }}</td>
                                    <td>
                                        <span class="badge badge-{{ $invoice->status_color }}">
                                            {{ $invoice->status_label }}
                                        </span>
                                    </td>
                                    <td>
                                        <span class="badge badge-{{ $invoice->payment_status_color }}">
                                            {{ $invoice->payment_status_label }}
                                        </span>
                                    </td>
                                    <td>{{ $invoice->created_at->format('d/m/Y') }}</td>
                                    <td>
                                        <a href="{{ route('admin.pages.transaksi.invoices.show', $invoice) }}" 
                                           class="btn btn-sm btn-info">Lihat</a>
                                        @if($invoice->status != 'paid')
                                        <a href="{{ route('admin.pages.transaksi.invoices.edit', $invoice) }}" 
                                           class="btn btn-sm btn-warning">Edit</a>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $invoices->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection