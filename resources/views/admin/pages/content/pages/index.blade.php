@extends('admin.layouts.main')
@section('title', 'Halaman Statis')
@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Halaman Statis</h4>
                    <a href="{{ route('admin.content.pages.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Tambah Halaman
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Judul</th>
                                    <th>Slug</th>
                                    <th>Status</th>
                                    <th>Terakhir Diperbarui</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($pages as $page)
                                <tr>
                                    <td>{{ $page->title }}</td>
                                    <td>{{ $page->slug }}</td>
                                    <td>
                                        <span class="badge {{ $page->is_active ? 'bg-success' : 'bg-secondary' }}">
                                            {{ $page->is_active ? 'Aktif' : 'Nonaktif' }}
                                        </span>
                                    </td>
                                    <td>{{ $page->updated_at->format('d M Y H:i') }}</td>
                                    <td>
                                        <a href="{{ route('admin.content.pages.edit', $page->id) }}" 
                                           class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.content.pages.destroy', $page->id) }}" 
                                              method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" 
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus halaman ini?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada halaman</td>
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