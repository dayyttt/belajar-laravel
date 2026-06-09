@extends('admin.layouts.main')

@section('title', 'Penugasan')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="h3 mb-0 text-gray-800">Penugasan</h1>
                    <p class="text-muted">Kelola penugasan service owner untuk layanan customer</p>
                </div>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createAssignmentModal">
                    <i class="fas fa-plus me-2"></i>Buat Penugasan
                </button>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row mb-4">
        <div class="col-md-3">
            <div class="card border-left-primary">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Penugasan
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">45</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-tasks fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-left-warning">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Menunggu Konfirmasi
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">8</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-clock fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-left-info">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Sedang Berlangsung
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">12</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-play fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card border-left-success">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Selesai
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">25</div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-check fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
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
                            <label class="form-label">Status</label>
                            <select name="status" class="form-select">
                                <option value="">Semua Status</option>
                                <option value="pending">Menunggu Konfirmasi</option>
                                <option value="confirmed">Dikonfirmasi</option>
                                <option value="in_progress">Sedang Berlangsung</option>
                                <option value="completed">Selesai</option>
                                <option value="cancelled">Dibatalkan</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Service Owner</label>
                            <select name="owner_id" class="form-select">
                                <option value="">Semua Owner</option>
                                <option value="1">John Doe Services</option>
                                <option value="2">ABC Cleaning</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Layanan</label>
                            <select name="service_id" class="form-select">
                                <option value="">Semua Layanan</option>
                                <option value="1">Cleaning Service</option>
                                <option value="2">Maintenance</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">&nbsp;</label>
                            <div class="d-flex gap-2">
                                <button type="submit" class="btn btn-outline-primary">
                                    <i class="fas fa-search me-1"></i>Filter
                                </button>
                                <a href="{{ route('admin.pages.penugasan.assignment.index') }}" class="btn btn-outline-secondary">
                                    <i class="fas fa-times me-1"></i>Reset
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Assignments Table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Daftar Penugasan</h5>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Customer</th>
                                    <th>Service Owner</th>
                                    <th>Layanan</th>
                                    <th>Tanggal & Waktu</th>
                                    <th>Status</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Sample data -->
                                <tr>
                                    <td>
                                        <span class="fw-bold">#ASG001</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm bg-info rounded-circle d-flex align-items-center justify-content-center me-2">
                                                <i class="fas fa-user text-white"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Jane Smith</div>
                                                <small class="text-muted">jane@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm bg-primary rounded-circle d-flex align-items-center justify-content-center me-2">
                                                <i class="fas fa-briefcase text-white"></i>
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
                                        <small class="text-muted">09:00 - 12:00</small>
                                    </td>
                                    <td>
                                        <span class="badge bg-warning">Menunggu Konfirmasi</span>
                                    </td>
                                    <td>
                                        <span class="fw-bold text-success">Rp 150.000</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                Aksi
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Detail</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item text-success" href="#"><i class="fas fa-check me-2"></i>Konfirmasi</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-times me-2"></i>Batalkan</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span class="fw-bold">#ASG002</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm bg-info rounded-circle d-flex align-items-center justify-content-center me-2">
                                                <i class="fas fa-user text-white"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">Bob Johnson</div>
                                                <small class="text-muted">bob@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-sm bg-primary rounded-circle d-flex align-items-center justify-content-center me-2">
                                                <i class="fas fa-briefcase text-white"></i>
                                            </div>
                                            <div>
                                                <div class="fw-semibold">ABC Cleaning</div>
                                                <small class="text-muted">abc@example.com</small>
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <span class="badge bg-success">Maintenance</span>
                                    </td>
                                    <td>
                                        <div class="fw-semibold">24 Des 2024</div>
                                        <small class="text-muted">14:00 - 17:00</small>
                                    </td>
                                    <td>
                                        <span class="badge bg-primary">Sedang Berlangsung</span>
                                    </td>
                                    <td>
                                        <span class="fw-bold text-success">Rp 300.000</span>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <button class="btn btn-sm btn-outline-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown">
                                                Aksi
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-eye me-2"></i>Detail</a></li>
                                                <li><a class="dropdown-item" href="#"><i class="fas fa-edit me-2"></i>Edit</a></li>
                                                <li><a class="dropdown-item text-success" href="#"><i class="fas fa-check me-2"></i>Selesaikan</a></li>
                                                <li><hr class="dropdown-divider"></li>
                                                <li><a class="dropdown-item text-danger" href="#"><i class="fas fa-times me-2"></i>Batalkan</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                    <!-- Pagination -->
                    <div class="d-flex justify-content-between align-items-center mt-3">
                        <div class="text-muted">
                            Menampilkan 1-10 dari 45 penugasan
                        </div>
                        <nav>
                            <ul class="pagination pagination-sm mb-0">
                                <li class="page-item disabled">
                                    <span class="page-link">Previous</span>
                                </li>
                                <li class="page-item active">
                                    <span class="page-link">1</span>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Create Assignment Modal -->
<div class="modal fade" id="createAssignmentModal" tabindex="-1">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Buat Penugasan Baru</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>
            <form>
                <div class="modal-body">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label class="form-label">Customer</label>
                            <select class="form-select" required>
                                <option value="">Pilih Customer</option>
                                <option value="1">Jane Smith</option>
                                <option value="2">Bob Johnson</option>
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
                            <label class="form-label">Service Owner</label>
                            <select class="form-select" required>
                                <option value="">Pilih Service Owner</option>
                                <option value="1">John Doe Services</option>
                                <option value="2">ABC Cleaning</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Prioritas</label>
                            <select class="form-select" required>
                                <option value="normal">Normal</option>
                                <option value="high">Tinggi</option>
                                <option value="urgent">Mendesak</option>
                            </select>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Tanggal</label>
                            <input type="date" class="form-control" required>
                        </div>
                        <div class="col-md-6">
                            <label class="form-label">Estimasi Durasi (jam)</label>
                            <input type="number" class="form-control" min="1" max="24" required>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Deskripsi Penugasan</label>
                            <textarea class="form-control" rows="3" placeholder="Jelaskan detail penugasan yang akan dilakukan..." required></textarea>
                        </div>
                        <div class="col-12">
                            <label class="form-label">Catatan Khusus</label>
                            <textarea class="form-control" rows="2" placeholder="Catatan tambahan atau instruksi khusus..."></textarea>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Buat Penugasan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<style>
.border-left-primary {
    border-left: 4px solid #4e73df !important;
}

.border-left-warning {
    border-left: 4px solid #f6c23e !important;
}

.border-left-info {
    border-left: 4px solid #36b9cc !important;
}

.border-left-success {
    border-left: 4px solid #1cc88a !important;
}

.avatar-sm {
    width: 32px;
    height: 32px;
    font-size: 12px;
}
</style>
@endsection