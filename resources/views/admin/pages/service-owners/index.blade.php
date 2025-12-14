@extends('admin.layouts.main')

@section('title', 'Manajemen Pemilik Jasa')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-6">
            <h4>Manajemen Pemilik Jasa</h4>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('admin.service-owners.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Pemilik Jasa
            </a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Brand/Perusahaan</th>
                            <th>PIC</th>
                            <th>Kontak</th>
                            <th>Komisi</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($owners->count() > 0)
                            @foreach($owners as $owner)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $owner->brand_name }}</td>
                                <td>{{ $owner->pic_name }}</td>
                                <td>
                                    {{ $owner->phone }}<br>
                                    {{ $owner->email }}
                                </td>
                                <td>{{ $owner->commission_rate }}%</td>
                                <td>
                                    <span class="badge {{ $owner->is_active ? 'badge-success' : 'badge-secondary' }}">
                                        {{ $owner->is_active ? 'Aktif' : 'Nonaktif' }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.service-owners.edit', $owner->id) }}" 
                                       class="btn btn-sm btn-warning" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.service-owners.destroy', $owner->id) }}" 
                                          method="POST" class="d-inline" 
                                          onsubmit="return confirm('Hapus data ini?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="7" class="text-center">Belum ada data pemilik jasa</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
$(document).ready(function() {
    $('#dataTable').DataTable();
});
</script>
@endpush