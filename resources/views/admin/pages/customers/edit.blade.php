@extends('admin.layouts.main')
@section('title', 'Edit Data Pelanggan')
@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Edit Data Pelanggan</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">Pelanggan</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('customers.show', $customer) }}">{{ $customer->name }}</a></li>
                    <li class="breadcrumb-item active">Edit</li>
                </ol>
            </nav>
        </div>
        <div class="btn-group">
            <a href="{{ route('customers.show', $customer) }}" class="btn btn-outline-info">
                <i class="fas fa-eye me-2"></i>Lihat Detail
            </a>
            <a href="{{ route('customers.index') }}" class="btn btn-outline-secondary">
                <i class="fas fa-arrow-left me-2"></i>Kembali
            </a>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-bottom">
                    <div class="d-flex align-items-center">
                        <div class="avatar-circle bg-warning text-white me-3">
                            {{ strtoupper(substr($customer->name, 0, 2)) }}
                        </div>
                        <div>
                            <h5 class="card-title mb-0">{{ $customer->name }}</h5>
                            <small class="text-muted">Edit informasi pelanggan</small>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('customers.update', $customer->id) }}" method="POST" id="customerForm">
                        @csrf
                        @method('PUT')
                        @include('admin.pages.customers._form')
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-light">
                    <h6 class="card-title mb-0">
                        <i class="fas fa-chart-line me-2"></i>Statistik Pelanggan
                    </h6>
                </div>
                <div class="card-body">
                    <div class="row text-center">
                        <div class="col-6">
                            <div class="border-end">
                                <h4 class="text-primary mb-0">{{ $customer->bookings_count ?? 0 }}</h4>
                                <small class="text-muted">Total Booking</small>
                            </div>
                        </div>
                        <div class="col-6">
                            <h4 class="text-success mb-0">
                                {{ $customer->bookings()->where('status', 'completed')->count() }}
                            </h4>
                            <small class="text-muted">Selesai</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-header bg-light">
                    <h6 class="card-title mb-0">
                        <i class="fas fa-info-circle me-2"></i>Informasi
                    </h6>
                </div>
                <div class="card-body">
                    <div class="alert alert-warning border-0">
                        <h6 class="alert-heading">Perhatian:</h6>
                        <p class="mb-0 small">Perubahan data akan mempengaruhi semua booking yang terkait dengan pelanggan ini.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection