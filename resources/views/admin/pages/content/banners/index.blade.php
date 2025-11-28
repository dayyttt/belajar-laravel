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
                                        <img src="{{ Storage::url($banner->image) }}" alt="{{ $banner->title }}" style="max-width: 100px;">
                                    </td>
                                    <td>{{ $banner->title }}</td>
                                    <td>
                                        <span class="badge {{ $banner->is_active ? 'bg-success' : 'bg-secondary' }}">
                                            {{ $banner->is_active ? 'Aktif' : 'Nonaktif' }}
                                        </span>
                                    </td>
                                    <td>{{ $banner->order }}</td>
                                    <td>
                                        <a href="{{ route('admin.content.banners.edit', $banner->id) }}" 
                                           class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.content.banners.destroy', $banner->id) }}" 
                                              method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" 
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus banner ini?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
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