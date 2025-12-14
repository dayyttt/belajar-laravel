@extends('layouts.admin')

@section('title', 'Ringkasan Pembayaran')
<script>
    window.paymentSummaryData = @json($summary);
</script>
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Ringkasan Pembayaran</h3>
                    <div class="card-tools">
                        <form method="GET" class="d-inline">
                            <div class="input-group input-group-sm">
                                <input type="date" name="date_from" class="form-control" 
                                       value="{{ request('date_from') }}" placeholder="Dari">
                                <input type="date" name="date_to" class="form-control" 
                                       value="{{ request('date_to') }}" placeholder="Sampai">
                                <button type="submit" class="btn btn-default">Filter</button>
                                <a href="{{ route('admin.pages.transaksi.laporan.payment-summary') }}" class="btn btn-secondary">Reset</a>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Summary Cards -->
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success"><i class="fas fa-money-check"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Total Pembayaran</span>
                                    <span class="info-box-number">Rp {{ number_format($summary['total_amount'], 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info"><i class="fas fa-hand-holding-cash"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Tunai</span>
                                    <span class="info-box-number">Rp {{ number_format($summary['cash_total'], 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning"><i class="fas fa-exchange-alt"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Transfer</span>
                                    <span class="info-box-number">Rp {{ number_format($summary['transfer_total'], 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-primary"><i class="fas fa-qrcode"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">QRIS</span>
                                    <span class="info-box-number">Rp {{ number_format($summary['qris_total'], 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Payment Methods Chart -->
                    <div class="row mb-4">
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Distribusi Metode Pembayaran</h4>
                                </div>
                                <div class="card-body">
                                    <canvas id="paymentMethodChart" width="400" height="200"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4>Statistik Pembayaran</h4>
                                </div>
                                <div class="card-body">
                                    <table class="table table-sm">
                                        <tr>
                                            <td>Total Transaksi</td>
                                            <td class="text-right">{{ $summary['payment_count'] }}</td>
                                        </tr>
                                        <tr>
                                            <td>Rata-rata Transaksi</td>
                                            <td class="text-right">
                                                Rp {{ number_format($summary['payment_count'] > 0 ? $summary['total_amount'] / $summary['payment_count'] : 0, 0, ',', '.') }}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Metode Terbanyak</td>
                                            <td class="text-right">
                                                @php
                                                    $methods = ['cash' => $summary['cash_total'], 'transfer' => $summary['transfer_total'], 'qris' => $summary['qris_total'], 'other' => $summary['other_total']];
                                                    $maxMethod = array_keys($methods, max($methods))[0];
                                                    $methodLabels = ['cash' => 'Tunai', 'transfer' => 'Transfer', 'qris' => 'QRIS', 'other' => 'Lainnya'];
                                                @endphp
                                                {{ $methodLabels[$maxMethod] }}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Detail Payments -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Invoice</th>
                                    <th>Pelanggan</th>
                                    <th>Jumlah</th>
                                    <th>Metode</th>
                                    <th>PIC</th>
                                    <th>Status</th>
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
                                    <td>{{ $payment->invoice->customer_name ?? '-' }}</td>
                                    <td>{{ $payment->formatted_amount }}</td>
                                    <td>{{ $payment->payment_method_label }}</td>
                                    <td>{{ $payment->processor->name ?? '-' }}</td>
                                    <td>
                                        <span class="badge badge-{{ $payment->status == 'completed' ? 'success' : 'warning' }}">
                                            {{ $payment->status == 'completed' ? 'Selesai' : 'Pending' }}
                                        </span>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
