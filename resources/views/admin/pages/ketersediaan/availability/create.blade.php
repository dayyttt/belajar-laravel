@extends('admin.layouts.main')

@section('title', 'Tambah Pengaturan Ketersediaan')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tambah Pengaturan Ketersediaan</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.pages.ketersediaan.availability.store') }}" method="POST">
                @csrf
                @include('admin.pages.ketersediaan.availability._form')
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Simpan</button>
                    <a href="{{ route('admin.pages.ketersediaan.availability.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection