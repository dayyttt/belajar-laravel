@extends('admin.layouts.main')

@section('title', 'Edit Pengaturan Ketersediaan')

@section('content')
<div class="container-fluid">
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Edit Pengaturan Ketersediaan</h1>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.availability.update', $availability->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.pages.ketersediaan.availability._form')
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                    <a href="{{ route('admin.pages.ketersediaan.availability.index') }}" class="btn btn-secondary">Batal</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection