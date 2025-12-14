@extends('admin.layouts.main')

@section('title', 'Pengaturan Ketersediaan')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-6">
            <h4>Pengaturan Ketersediaan</h4>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('admin.page.ketersediaan.availability.create') }}" class="btn btn-primary">
                <i class="fas fa-plus"></i> Tambah Pengaturan
            </a>
            <a href="{{ route('admin.pages.ketersediaan.availability.calendar') }}" class="btn btn-info">
                <i class="fas fa-calendar"></i> Kalender
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
                            <th>Pemilik Jasa</th>
                            <th>Layanan</th>
                            <th>Hari</th>
                            <th>Jam Operasional</th>
                            <th>Durasi Slot</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if($settings->count() > 0)
                            @foreach($settings as $setting)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $setting->serviceOwner->brand_name }}</td>
                                <td>{{ $setting->service ? $setting->service->name : 'Semua Layanan' }}</td>
                                <td>{{ $setting->day_of_week }}</td>
                                <td>{{ $setting->opening_time }} - {{ $setting->closing_time }}</td>
                                <td>{{ $setting->slot_duration_minutes }} menit</td>
                                <td>
                                    <span class="badge {{ $setting->is_available ? 'badge-success' : 'badge-secondary' }}">
                                        {{ $setting->is_available ? 'Aktif' : 'Nonaktif' }}
                                    </span>
                                </td>
                                <td>
                                    <a href="{{ route('admin.pages.ketersediaan.availability.edit', $setting->id) }}" 
                                       class="btn btn-sm btn-warning" title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <form action="{{ route('admin.pages.ketersediaan.availability.destroy', $setting->id) }}" 
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
                                <td colspan="8" class="text-center">Belum ada data pengaturan ketersediaan</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

