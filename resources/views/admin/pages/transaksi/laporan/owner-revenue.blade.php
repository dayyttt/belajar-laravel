@extends('layouts.admin')

@section('title', 'Laporan Omset Pemilik Jasa')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Laporan Omset Pemilik Jasa</h3>
                    <div class="card-tools">
                        <form method="GET" class="d-inline">
                            <div class="input-group input-group-sm">
                                <input type="date" name="date_from" class="form-control" 
                                       value="{{ request('date_from') }}" placeholder="Dari">
                                <input type="date" name="date_to" class="form-control" 
                                       value="{{ request('date_to') }}" placeholder="Sampai">
                                <button type="submit" class="btn btn-default">Filter</button>
                                <a href="{{ route('admin.pages.transaksi.laporan.owner-revenue') }}" class="btn btn-secondary">Reset</a>
                            </div> 
                        </form>
                    </div>
                </div>
                <div class="card-body">
                    <!-- Summary Cards -->
                    <div class="row mb-4">
                        <div class="col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-info"><i class="fas fa-money-bill"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Total Omset</span>
                                    <span class="info-box-number">Rp {{ number_format($totalAllRevenue, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-success"><i class="fas fa-hand-holding-usd"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Total Bagi Mitra</span>
                                    <span class="info-box-number">Rp {{ number_format($totalAllOwnerShare, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-warning"><i class="fas fa-store"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Total Platform</span>
                                    <span class="info-box-number">Rp {{ number_format($totalAllPlatformShare, 0, ',', '.') }}</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="info-box">
                                <span class="info-box-icon bg-primary"><i class="fas fa-users"></i></span>
                                <div class="info-box-content">
                                    <span class="info-box-text">Total Mitra</span>
                                    <span class="info-box-number">{{ $owners->count() }}</span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Detail Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Pemilik Jasa</th>
                                    <th>Jumlah Layanan</th>
                                    <th>Total Booking</th>
                                    <th>Total Omset</th>
                                    <th>Bagi Mitra (70%)</th>
                                    <th>Bagi Platform (30%)</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($owners as $data)
                                <tr>
                                    <td>
                                        <strong>{{ $data['owner']->name }}</strong><br>
                                        <small class="text-muted">{{ $data['owner']->email }}</small>
                                    </td>
                                    <td class="text-center">{{ $data['service_count'] }}</td>
                                    <td class="text-center">{{ $data['booking_count'] }}</td>
                                    <td class="text-right">Rp {{ number_format($data['total_revenue'], 0, ',', '.') }}</td>
                                    <td class="text-right">Rp {{ number_format($data['owner_share'], 0, ',', '.') }}</td>
                                    <td class="text-right">Rp {{ number_format($data['platform_share'], 0, ',', '.') }}</td>
                                    <td>
                                        <button type="button" class="btn btn-sm btn-info" 
                                                onclick="showDetail({{ $data['owner']->id }})">
                                            <i class="fas fa-eye"></i> Detail
                                        </button>
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
