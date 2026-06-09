@extends('admin.layouts.main')

@section('title', 'Jadwal Penugasan')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="h3 mb-0 text-gray-800">Jadwal Penugasan</h1>
                    <p class="text-muted">Kelola jadwal penugasan service owner</p>
                </div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createScheduleModal">
                    <i class="fas fa-plus me-2"></i>Tambah Jadwal
                </button>
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form method="GET" class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Service Owner</label>
                            <select name="owner_id" class="form-select">
                                <option value="">Semua Owner</option>
                                <!-- Options will be populated from controller -->
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Tanggal Mulai</label>
                            <input type="date" name="start_date" class="form-control" value="{{ request('start_date') }}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Tanggal Akhir</label>
                            <input type="date" name="end_date" class="form-control" value="{{ request('end_date') }}">
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">&nbsp;</label>
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="fas fa-search me-1"></i>Filter
                                </button>
                                <a href="{{ route('admin.pages.penugasan.jadwal.index') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-times me-1"></i>Reset
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Schedule Table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Daftar Jadwal</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Service Owner</th>
                                    <th>Layanan</th>
                                    <th>Tanggal</th>
                                    <th>Waktu</th>
                                    <th>Status</th>
                                    <th>Customer</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample data - replace with actual data from controller -->
                                <tr>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm bg-primary rounded-circle d-flex align-items-center justify-content-center me-2">
                                                <i class="fas fa-user text-white"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">John Doe Services</div>
                                                <small class="text-muted">john@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-info">Cleaning Service</span>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">25 Des 2024</div>
                                        <small class="text-muted">Rabu</small>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">09:00 - 12:00</div>
                                        <small class="text-muted">3 jam</small>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">Terjadwal</span>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">Jane Smith</div>
                                        <small class="text-muted">jane@example.com</small>
                                    </td>
                                    <td>
                                        <div class="btn-group" role="group">
                                            <button class="btn btn-sm btn-outline-primary" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-success" title="Complete">
                                                <i class="fas fa-check"></i>
                                            </button>
                                            <button class="btn btn-sm btn-outline-danger" title="Cancel">
                                                <i class="fas fa-times"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="7" class="text-center text-muted py-4">
                                        <i class="fas fa-calendar-alt fa-2x mb-2"></i>
                                        <div>Belum ada jadwal penugasan</div>
                                        <small>Klik "Tambah Jadwal" untuk membuat jadwal baru</small>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Schedule Modal -->
<div class="modal fade" id="createScheduleModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Jadwal Penugasan</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Service Owner</label>
                            <select class="form-select" required>
                                <option value="">Pilih Service Owner</option>
                                <option value="1">John Doe Services</option>
                                <option value="2">ABC Cleaning</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Layanan</label>
                            <select class="form-select" required>
                                <option value="">Pilih Layanan</option>
                                <option value="1">Cleaning Service</option>
                                <option value="2">Maintenance</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Customer</label>
                            <select class="form-select" required>
                                <option value="">Pilih Customer</option>
                                <option value="1">Jane Smith</option>
                                <option value="2">Bob Johnson</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Waktu Mulai</label>
                            <input type="time" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Waktu Selesai</label>
                            <input type="time" class="form-control" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Catatan</label>
                            <textarea class="form-control" rows="3" placeholder="Catatan tambahan untuk penugasan..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Simpan Jadwal</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection