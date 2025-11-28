@extends('admin.layouts.main')
@section('title', 'Dashboard')

@section('content')
<div class="container-fluid">
    <!-- Notifications -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Notifikasi</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="alert alert-info">
                                <i class="fas fa-bell"></i> {{ $newBookings }} Booking Baru
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="alert alert-warning">
                                <i class="fas fa-clock"></i> {{ $unconfirmedBookings }} Booking Perlu Konfirmasi
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="alert alert-danger">
                                <i class="fas fa-exclamation-triangle"></i> {{ $pendingPayments }} Pembayaran Belum Lunas
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Booking Summary -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Ringkasan Booking</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card bg-light mb-3">
                                <div class="card-body text-center">
                                    <h2 class="display-4">{{ $todayBookings }}</h2>
                                    <p class="card-text">Hari Ini</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-light mb-3">
                                <div class="card-body text-center">
                                    <h2 class="display-4">{{ $weekBookings }}</h2>
                                    <p class="card-text">Minggu Ini</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card bg-light mb-3">
                                <div class="card-body text-center">
                                    <h2 class="display-4">{{ $monthBookings }}</h2>
                                    <p class="card-text">Bulan Ini</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Revenue Summary -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Ringkasan Omset</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card text-white bg-success mb-3">
                                <div class="card-body text-center">
                                    <h2 class="display-5">Rp {{ number_format($todayRevenue, 0, ',', '.') }}</h2>
                                    <p class="card-text">Hari Ini</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-info mb-3">
                                <div class="card-body text-center">
                                    <h2 class="display-5">Rp {{ number_format($weekRevenue, 0, ',', '.') }}</h2>
                                    <p class="card-text">Minggu Ini</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card text-white bg-primary mb-3">
                                <div class="card-body text-center">
                                    <h2 class="display-5">Rp {{ number_format($monthRevenue, 0, ',', '.') }}</h2>
                                    <p class="card-text">Bulan Ini</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Schedule Status -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow">
                <div class="card-header bg-primary text-white">
                    <h5 class="mb-0">Status Slot Jadwal Hari Ini ({{ \Carbon\Carbon::today()->format('d F Y') }})</h5>
                </div>
                <div class="card-body">
                    <div class="row">
                        @foreach($scheduleStatus as $slot => $status)
                            <div class="col-md-3 mb-3">
                                <div class="card 
                                    @if($status['status_class'] == 'busy') bg-danger text-white
                                    @elseif($status['status_class'] == 'medium') bg-warning
                                    @else bg-success text-white
                                    @endif">
                                    <div class="card-body text-center">
                                        <h4>{{ $slot }}</h4>
                                        <h2>{{ $status['count'] }} Booking</h2>
                                        <p class="h4">{{ $status['status'] }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .card {
        transition: transform 0.2s;
    }
    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 4px 8px rgba(0,0,0,0.1);
    }
    .display-4 {
        font-size: 2.5rem;
        font-weight: 300;
        line-height: 1.2;
    }
</style>
@endsection
