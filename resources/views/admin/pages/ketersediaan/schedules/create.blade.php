@extends('admin.layouts.main')

@section('title', 'Tambah Jadwal Baru')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <i class="fas fa-calendar-plus mr-2"></i>Tambah Jadwal Baru
        </h1>
        <a href="{{ route('admin.pages.ketersediaan.schedules.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left mr-1"></i> Kembali
        </a>
    </div>

    <!-- Form Card -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Informasi Jadwal</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.pages.ketersediaan.schedules.store') }}" method="POST">
                @csrf
                @include('admin.pages.ketersediaan.schedules._form')
                <div class="row mt-4">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save mr-2"></i> Simpan Jadwal
                        </button>
                        <a href="{{ route('admin.pages.ketersediaan.schedules.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times mr-2"></i> Batal
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
