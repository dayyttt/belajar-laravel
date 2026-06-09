@extends('layouts.admin')

@section('title', 'Detail Banner')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Banner</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.content.banners.edit', $banner->id) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="{{ route('admin.content.banners.index') }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-8">
                            <table class="table table-borderless">
                                <tr>
                                    <th width="200">Judul</th>
                                    <td>{{ $banner->title }}</td>
                                </tr>
                                <tr>
                                    <th>Deskripsi</th>
                                    <td>{{ $banner->description ?: '-' }}</td>
                                </tr>
                                <tr>
                                    <th>Teks Tombol</th>
                                    <td>{{ $banner->button_text ?: '-' }}</td>
                                </tr>
                                <tr>
                                    <th>URL Tombol</th>
                                    <td>
                                        @if($banner->button_url)
                                            <a href="{{ $banner->button_url }}" target="_blank" class="text-primary">
                                                {{ $banner->button_url }}
                                                <i class="fas fa-external-link-alt ml-1"></i>
                                            </a>
                                        @else
                                            -
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Urutan</th>
                                    <td>{{ $banner->order ?: 0 }}</td>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <td>
                                        @if($banner->is_active)
                                            <span class="badge badge-success">Aktif</span>
                                        @else
                                            <span class="badge badge-secondary">Tidak Aktif</span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <th>Dibuat</th>
                                    <td>{{ $banner->created_at->format('d M Y H:i') }}</td>
                                </tr>
                                <tr>
                                    <th>Diperbarui</th>
                                    <td>{{ $banner->updated_at->format('d M Y H:i') }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-4">
                            @if($banner->image)
                            <div class="text-center">
                                <h5>Gambar Banner</h5>
                                <img src="{{ asset('storage/' . $banner->image) }}" 
                                     alt="{{ $banner->title }}" 
                                     class="img-fluid rounded shadow"
                                     onerror="this.style.border='3px solid red'; this.alt='Error loading image';">
                                <br><small class="text-muted mt-2 d-block">URL: {{ asset('storage/' . $banner->image) }}</small>
                                <small class="text-muted d-block">File: {{ $banner->image }}</small>
                            </div>
                            @else
                            <div class="text-center text-muted">
                                <i class="fas fa-image fa-3x mb-3"></i>
                                <p>Tidak ada gambar</p>
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <a href="{{ route('admin.content.banners.edit', $banner->id) }}" class="btn btn-warning">
                                <i class="fas fa-edit"></i> Edit Banner
                            </a>
                        </div>
                        <div class="col-md-6 text-right">
                            <form action="{{ route('admin.content.banners.destroy', $banner->id) }}" 
                                  method="POST" 
                                  style="display: inline-block;"
                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus banner ini?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">
                                    <i class="fas fa-trash"></i> Hapus Banner
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection