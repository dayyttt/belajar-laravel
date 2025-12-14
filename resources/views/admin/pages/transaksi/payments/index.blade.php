@extends('layouts.admin')

@section('title', 'Daftar Pembayaran')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Pembayaran</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.pages.transaksi.payments.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Pembayaran Baru
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="GET" class="mb-3">
                        <div class="row">
                            <div class="col-md-2">
                                <select name="payment_method" class="form-control">
                                    <option value="">Semua Metode</option>
                                    <option value="cash" {{ request('payment_method') == 'cash' ? 'selected' : '' }}>Tunai</option>
                                    <option value="transfer" {{ request('payment_method') == 'transfer' ? 'selected' : '' }}>Transfer</option>
                                    <option value="qris" {{ request('payment_method') == 'qris' ? 'selected' : '' }}>QRIS</option>
                                    <option value="other" {{ request('payment_method') == 'other' ? 'selected' : '' }}>Lainnya</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select name="status" class="form-control">
                                    <option value="">Semua Status</option>
                                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                                    <option value="verified" {{ request('status') == 'verified' ? 'selected' : '' }}>Terverifikasi</option>
                                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Selesai</option>
                                    <option value="failed" {{ request('status') == 'failed' ? 'selected' : '' }}>Gagal</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="date" name="date_from" class="form-control" 
                                       placeholder="Dari tanggal" value="{{ request('date_from') }}">
                            </div>
                            <div class="col-md-2">
                                <input type="date" name="date_to" class="form-control" 
                                       placeholder="Sampai tanggal" value="{{ request('date_to') }}">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-default">Filter</button>
                                <a href="{{ route('admin.pages.transaksi.payments.index') }}" class="btn btn-secondary">Reset</a>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Invoice</th>
                                    <th>Pelanggan</th>
                                    <th>Jumlah</th>
                                    <th>Metode</th>
                                    <th>Status</th>
                                    <th>PIC</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($payments as $payment)
                                <tr>
                                    <td>{{ $payment->payment_date->format('d/m/Y') }}</td>
                                    <td>
                                        @if($payment->invoice)
                                            <a href="{{ route('admin.pages.transaksi.invoices.show', $payment->invoice) }}">
                                                {{ $payment->invoice->invoice_number }}
                                            </a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>
                                        @if($payment->invoice)
                                            {{ $payment->invoice->customer_name }}
                                        @elseif($payment->booking)
                                            {{ $payment->booking->customer_name }}
                                        @else
                                            -
                                        @endif
                                    </td>
                                    <td>{{ $payment->formatted_amount }}</td>
                                    <td>{{ $payment->payment_method_label }}</td>
                                    <td>
                                        <span class="badge badge-{{ $payment->status == 'completed' ? 'success' : ($payment->status == 'failed' ? 'danger' : 'warning') }}">
                                            {{ $payment->status == 'completed' ? 'Selesai' : ($payment->status == 'failed' ? 'Gagal' : 'Pending') }}
                                        </span>
                                    </td>
                                    <td>{{ $payment->processor->name ?? '-' }}</td>
                                    <td>
                                        <a href="{{ route('admin.pages.transaksi.payments.edit', $payment) }}" 
                                           class="btn btn-sm btn-warning">Edit</a>
                                        @if($payment->status == 'pending')
                                        <button type="button" class="btn btn-sm btn-success" 
                                                onclick="verifyPayment({{ $payment->id }})">Verifikasi</button>
                                        @endif
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $payments->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

