@extends('admin.layouts.main')

@section('title', 'Highlight Layanan')
@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Highlight Layanan</h4>
                    <a href="{{ route('admin.content.highlights.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Tambah Highlight
                    </a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Ikon</th>
                                    <th>Judul</th>
                                    <th>Status</th>
                                    <th>Urutan</th>
                                    <th>Unggulan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($highlights as $highlight)
                                <tr>
                                    <td>
                                        @if($highlight->icon)
                                            <i class="{{ $highlight->icon }} fa-2x"></i>
                                        @else
                                            <i class="fas fa-star fa-2x"></i>
                                        @endif
                                    </td>
                                    <td>{{ $highlight->title }}</td>
                                    <td>
                                        <span class="badge {{ $highlight->is_active ? 'bg-success' : 'bg-secondary' }}">
                                            {{ $highlight->is_active ? 'Aktif' : 'Nonaktif' }}
                                        </span>
                                    </td>
                                    <td>{{ $highlight->order }}</td>
                                    <td>
                                        @if($highlight->is_featured)
                                            <span class="badge bg-warning">Unggulan</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('admin.content.highlights.edit', $highlight->id) }}" 
                                           class="btn btn-sm btn-warning">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <form action="{{ route('admin.content.highlights.destroy', $highlight->id) }}" 
                                              method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-sm btn-danger" 
                                                    onclick="return confirm('Apakah Anda yakin ingin menghapus highlight ini?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center">Tidak ada data highlight</td>
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