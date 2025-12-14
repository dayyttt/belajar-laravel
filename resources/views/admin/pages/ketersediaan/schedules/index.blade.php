@extends('admin.layouts.main')

@section('title', 'Manajemen Jadwal')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <i class="fas fa-calendar-alt mr-2"></i>Manajemen Jadwal
        </h1>
        <div>
            <a href="{{ route('admin.schedules.create') }}" class="btn btn-primary btn-sm">
                <i class="fas fa-plus mr-1"></i> Tambah Jadwal
            </a>
        </div>
    </div>

    <!-- Filters -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Filter Jadwal</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.pages.ketersediaan.schedules.index') }}" method="GET">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label text-sm">Pemilik Jasa</label>
                        <select name="service_owner_id" class="form-control form-control-sm">
                            <option value="">Semua Pemilik Jasa</option>
                            @foreach(\App\Models\ServiceOwner::all() as $owner)
                                <option value="{{ $owner->id }}" {{ request('service_owner_id') == $owner->id ? 'selected' : '' }}>
                                    {{ $owner->brand_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label text-sm">Status</label>
                        <select name="status" class="form-control form-control-sm">
                            <option value="">Semua Status</option>
                            <option value="active" {{ request('status') == 'active' ? 'selected' : '' }}>Aktif</option>
                            <option value="inactive" {{ request('status') == 'inactive' ? 'selected' : '' }}>Nonaktif</option>
                            <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label text-sm">Tanggal Mulai</label>
                        <input type="date" name="start_date" class="form-control form-control-sm" 
                               value="{{ request('start_date') }}">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label text-sm">Tanggal Selesai</label>
                        <input type="date" name="end_date" class="form-control form-control-sm" 
                               value="{{ request('end_date') }}">
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary btn-sm">
                            <i class="fas fa-filter mr-1"></i> Filter
                        </button>
                        <a href="{{ route('admin.pages.ketersediaan.schedules.index') }}" class="btn btn-secondary btn-sm">
                            <i class="fas fa-times mr-1"></i> Reset
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Schedules Table -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Jadwal</h6>
        </div>
        <div class="card-body">
            @if($schedules->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover" id="schedulesTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Judul</th>
                                <th>Pemilik Jasa</th>
                                <th>Layanan</th>
                                <th>Tanggal</th>
                                <th>Waktu</th>
                                <th>Durasi</th>
                                <th>Status</th>
                                <th>Slot</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedules as $schedule)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <strong>{{ $schedule->title }}</strong>
                                    @if($schedule->description)
                                        <br><small class="text-muted">{{ Str::limit($schedule->description, 50) }}</small>
                                    @endif
                                </td>
                                <td>{{ $schedule->serviceOwner->brand_name }}</td>
                                <td>{{ $schedule->service->name }}</td>
                                <td>
                                    <span class="badge badge-info">
                                        {{ $schedule->date->format('d M Y') }}
                                    </span>
                                </td>
                                <td>
                                    {{ $schedule->start_time }} - {{ $schedule->end_time }}
                                </td>
                                <td>{{ $schedule->duration_minutes }} menit</td>
                                <td>
                                    @switch($schedule->status)
                                        @case('active')
                                            <span class="badge badge-success">Aktif</span>
                                            @break
                                        @case('inactive')
                                            <span class="badge badge-secondary">Nonaktif</span>
                                            @break
                                        @case('cancelled')
                                            <span class="badge badge-danger">Dibatalkan</span>
                                            @break
                                    @endswitch
                                </td>
                                <td>
                                    <span class="badge badge-{{ $schedule->timeSlots->count() > 0 ? 'primary' : 'light' }}">
                                        {{ $schedule->timeSlots->count() }} slot
                                    </span>
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="{{ route('admin.schedules.edit', $schedule->id) }}" 
                                           class="btn btn-outline-warning" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        <button type="button" class="btn btn-outline-info" 
                                                onclick="generateSlots({{ $schedule->id }})" title="Generate Slots">
                                            <i class="fas fa-clock"></i>
                                        </button>
                                        <form action="{{ route('admin.schedules.destroy', $schedule->id) }}" 
                                              method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger" 
                                                    onclick="return confirm('Hapus jadwal ini?')" title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @else
                <div class="text-center py-5">
                    <i class="fas fa-calendar-times fa-3x text-gray-300 mb-3"></i>
                    <h5 class="text-gray-400">Belum ada data jadwal</h5>
                    <p class="text-gray-400">Tambahkan jadwal baru untuk memulai</p>
                    <a href="{{ route('admin.schedules.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus mr-2"></i> Tambah Jadwal
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Generate Slots Modal -->
<div class="modal fade" id="generateSlotsModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Generate Time Slots</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin generate time slots untuk jadwal ini?</p>
                <p class="text-muted">Slot yang ada akan dihapus dan diganti dengan yang baru.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <form id="generateSlotsForm" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-primary">Generate</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
