@extends('admin.layouts.main')
@section('title', 'Banner')
@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Daftar Banner</h4>
                    <a href="{{ route('admin.content.banners.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Tambah Banner
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Gambar</th>
                                    <th>Judul</th>
                                    <th>Status</th>
                                    <th>Urutan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($banners as $banner)
                                <tr>
                                    <td>
                                        @if($banner->image)
                                            <img src="{{ asset('storage/' . $banner->image) }}" 
                                                 alt="{{ $banner->title }}" 
                                                 class="img-thumbnail" 
                                                 style="max-width: 80px; max-height: 60px; object-fit: cover;"
                                                 onerror="this.style.border='2px solid red'; this.alt='Error loading: {{ asset('storage/' . $banner->image) }}';">
                                            <br><small class="text-muted">{{ asset('storage/' . $banner->image) }}</small>
                                        @else
                                            <div class="text-muted text-center" style="width: 80px; height: 60px; display: flex; align-items: center; justify-content: center; border: 1px dashed #ddd; border-radius: 4px;">
                                                <i class="fas fa-image"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td>{{ $banner->title }}</td>
                                    <td>
                                        <span class="badge {{ $banner->is_active ? 'bg-success' : 'bg-secondary' }}">
                                            {{ $banner->is_active ? 'Aktif' : 'Nonaktif' }}
                                        </span>
                                    </td>
                                    <td>{{ $banner->order }}</td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('admin.content.banners.show', $banner->id) }}" 
                                               class="btn btn-sm btn-info" title="Lihat Detail">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('admin.content.banners.edit', $banner->id) }}" 
                                               class="btn btn-sm btn-warning" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('admin.content.banners.destroy', $banner->id) }}" 
                                                  method="POST" class="d-inline">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" 
                                                        title="Hapus"
                                                        onclick="return confirm('Apakah Anda yakin ingin menghapus banner ini?')">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada data banner</td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection