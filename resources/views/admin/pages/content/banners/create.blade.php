@extends('admin.layouts.main')
@section('title', 'Tambah Banner Baru')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Tambah Banner Baru</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.content.banners.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="title" class="form-label">Judul Banner</label>
                            <input type="text" class="form-control" id="title" name="title" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Deskripsi</label>
                            <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Gambar Banner</label>
                            <input type="file" class="form-control" id="image" name="image" required>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="button_text" class="form-label">Teks Tombol</label>
                                <input type="text" class="form-control" id="button_text" name="button_text">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="button_url" class="form-label">URL Tombol</label>
                                <input type="url" class="form-control" id="button_url" name="button_url">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="order" class="form-label">Urutan</label>
                                <input type="number" class="form-control" id="order" name="order" value="0">
                            </div>
                            <div class="col-md-6 mb-3 d-flex align-items-end">
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="is_active" name="is_active" value="1" checked>
                                    <label class="form-check-label" for="is_active">Aktif</label>
                                </div>
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary">Simpan</button>
                        <a href="{{ route('admin.content.banners.index') }}" class="btn btn-secondary">Batal</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection