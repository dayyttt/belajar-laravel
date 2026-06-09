@extends('layouts.admin')

@section('title', 'Edit Banner')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Edit Banner</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.content.banners.index') }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.content.banners.update', $banner->id) }}" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="row">
                            <div class="col-md-8">
                                <div class="form-group">
                                    <label for="title">Judul Banner <span class="text-danger">*</span></label>
                                    <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror" 
                                           value="{{ old('title', $banner->title) }}" required>
                                    @error('title')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea name="description" id="description" class="form-control @error('description') is-invalid @enderror" 
                                              rows="4" placeholder="Deskripsi banner">{{ old('description', $banner->description) }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="button_text">Teks Tombol</label>
                                            <input type="text" name="button_text" id="button_text" 
                                                   class="form-control @error('button_text') is-invalid @enderror" 
                                                   value="{{ old('button_text', $banner->button_text) }}" 
                                                   placeholder="Contoh: Pelajari Lebih Lanjut">
                                            @error('button_text')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="button_url">URL Tombol</label>
                                            <input type="url" name="button_url" id="button_url" 
                                                   class="form-control @error('button_url') is-invalid @enderror" 
                                                   value="{{ old('button_url', $banner->button_url) }}" 
                                                   placeholder="https://example.com">
                                            @error('button_url')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="order">Urutan</label>
                                            <input type="number" name="order" id="order" 
                                                   class="form-control @error('order') is-invalid @enderror" 
                                                   value="{{ old('order', $banner->order) }}" min="0">
                                            @error('order')
                                                <div class="invalid-feedback">{{ $message }}</div>
                                            @enderror
                                            <small class="form-text text-muted">Semakin kecil angka, semakin awal ditampilkan</small>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <div class="form-check mt-4">
                                                <input type="checkbox" name="is_active" id="is_active" 
                                                       class="form-check-input" value="1" 
                                                       {{ old('is_active', $banner->is_active) ? 'checked' : '' }}>
                                                <label class="form-check-label" for="is_active">
                                                    Banner Aktif
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="image">Gambar Banner</label>
                                    <input type="file" name="image" id="image" 
                                           class="form-control @error('image') is-invalid @enderror" 
                                           accept="image/*">
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                    <small class="form-text text-muted">Maksimal 2MB. Format: JPG, PNG, GIF</small>
                                </div>

                                @if($banner->image)
                                <div class="form-group">
                                    <label>Gambar Saat Ini</label>
                                    <div class="text-center">
                                        <img src="{{ asset('storage/' . $banner->image) }}" 
                                             alt="{{ $banner->title }}" 
                                             class="img-fluid rounded" 
                                             style="max-height: 200px;">
                                    </div>
                                </div>
                                @endif

                                <!-- Preview untuk gambar baru -->
                                <div class="form-group" id="imagePreview" style="display: none;">
                                    <label>Preview Gambar Baru</label>
                                    <div class="text-center">
                                        <img id="previewImg" src="" alt="Preview" 
                                             class="img-fluid rounded" 
                                             style="max-height: 200px;">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Update Banner
                            </button>
                            <a href="{{ route('admin.content.banners.index') }}" class="btn btn-secondary">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const imageInput = document.getElementById('image');
    const previewDiv = document.getElementById('imagePreview');
    const previewImg = document.getElementById('previewImg');

    imageInput.addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (file) {
            const reader = new FileReader();
            reader.onload = function(e) {
                previewImg.src = e.target.result;
                previewDiv.style.display = 'block';
            };
            reader.readAsDataURL(file);
        } else {
            previewDiv.style.display = 'none';
        }
    });
});
</script>
@endsection