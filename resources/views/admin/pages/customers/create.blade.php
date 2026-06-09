@extends('admin.layouts.main')
@section('title', 'Tambah Pelanggan Baru')
@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <div>
            <h1 class="h3 mb-0 text-gray-800">Tambah Pelanggan Baru</h1>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb mb-0">
                    <li class="breadcrumb-item"><a href="{{ route('dashboard.index') }}">Dashboard</a></li>
                    <li class="breadcrumb-item"><a href="{{ route('customers.index') }}">Pelanggan</a></li>
                    <li class="breadcrumb-item active">Tambah Baru</li>
                </ol>
            </nav>
        </div>
        <a href="{{ route('customers.index') }}" class="btn btn-outline-secondary">
            <i class="fas fa-arrow-left me-2"></i>Kembali
        </a>
    </div>

    <div class="row">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-white border-bottom">
                    <div class="d-flex align-items-center">
                        <div class="icon-circle bg-primary text-white me-3">
                            <i class="fas fa-user-plus"></i>
                        </div>
                        <div>
                            <h5 class="card-title mb-0">Informasi Pelanggan</h5>
                            <small class="text-muted">Lengkapi data pelanggan baru</small>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <form action="{{ route('customers.store') }}" method="POST" id="customerForm">
                        @include('admin.pages.customers._form')
                    </form>
                </div>
            </div>
        </div>
        
        <div class="col-lg-4">
            <div class="card shadow-sm border-0">
                <div class="card-header bg-light">
                    <h6 class="card-title mb-0">
                        <i class="fas fa-info-circle me-2"></i>Panduan
                    </h6>
                </div>
                <div class="card-body">
                    <div class="alert alert-info border-0">
                        <h6 class="alert-heading">Tips Pengisian:</h6>
                        <ul class="mb-0 small">
                            <li>Nama lengkap wajib diisi</li>
                            <li>Email akan digunakan untuk notifikasi</li>
                            <li>Nomor telepon untuk konfirmasi booking</li>
                            <li>Alamat membantu dalam pengiriman</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection