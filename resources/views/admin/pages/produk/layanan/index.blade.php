@extends('admin.layouts.main')

@section('title', 'Produk Layanan')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manajemen Layanan</h1>
        <button class="btn btn-primary btn-sm shadow-sm" data-toggle="modal" data-target="#addServiceModal">
            <i class="fas fa-plus fa-sm"></i> Tambah Layanan
        </button>
    </div>

    <!-- Flash Message -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Content Row -->
    <div class="row">
        <div class="col-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex justify-content-between align-items-center">
                    <h6 class="m-0 font-weight-bold text-primary">Daftar Layanan</h6>
                    <div class="btn-group">
                        <button type="button" class="btn btn-outline-primary btn-sm" id="refreshBtn">
                            <i class="fas fa-sync-alt"></i> Refresh
                        </button>
                    </div>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover" id="servicesTable" width="100%" cellspacing="0">
                            <thead class="thead-dark">
                                <tr>
                                    <th width="5%">#</th>
                                    <th width="15%">Gambar</th>
                                    <th>Nama Layanan</th>
                                    <th width="15%">Harga</th>
                                    <th width="10%">Status</th>
                                    <th width="15%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($layanan as $layanan)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        @if($layanan->image)
                                            <img src="{{ asset('storage/' . $layanan->image) }}" 
                                                 alt="{{ $layanan->name }}" 
                                                 class="img-thumbnail service-image"
                                                 data-toggle="modal" 
                                                 data-target="#imageModal"
                                                 data-image="{{ asset('storage/' . $layanan->image) }}"
                                                 style="cursor: pointer; width: 80px; height: 80px; object-fit: cover;">
                                        @else
                                            <div class="no-image bg-light d-flex align-items-center justify-content-center"
                                                 style="width: 80px; height: 80px; cursor: pointer;"
                                                 data-toggle="modal" 
                                                 data-target="#imageModal"
                                                 data-image="{{ asset('images/no-image.png') }}">
                                                <i class="fas fa-image text-muted"></i>
                                            </div>
                                        @endif
                                    </td>
                                    <td>
                                        <h6 class="mb-1">{{ $layanan->name }}</h6>
                                        <small class="text-muted">{{ Str::limit($layanan->description, 50) }}</small>
                                    </td>
                                    <td>
                                        <span class="badge badge-success">Rp {{ number_format($layanan->price, 0, ',', '.') }}</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-{{ $layanan->is_active ? 'success' : 'danger' }}">
                                            {{ $layanan->is_active ? 'Aktif' : 'Nonaktif' }}
                                        </span>
                                    </td>
                                    <td>
                                        <div class="btn-group btn-group-sm" role="group">
                                            <button type="button" class="btn btn-warning btn-edit" 
                                                    data-service="{{ json_encode($layanan) }}"
                                                    data-toggle="tooltip" title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </button>
                                            <button type="button" class="btn btn-info btn-media" 
                                                    data-id="{{ $layanan->id }}"
                                                    data-name="{{ $layanan->name }}"
                                                    data-toggle="tooltip" title="Kelola Media">
                                                <i class="fas fa-images"></i>
                                            </button>
                                            <button type="button" class="btn btn-danger btn-delete" 
                                                    data-id="{{ $layanan->id }}"
                                                    data-name="{{ $layanan->name }}"
                                                    data-toggle="tooltip" title="Hapus">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="6" class="text-center py-4">
                                        <i class="fas fa-inbox fa-2x text-muted mb-2"></i>
                                        <p class="text-muted">Belum ada layanan yang ditambahkan</p>
                                    </td>
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

<!-- Modal Tambah Layanan -->
<div class="modal fade" id="addServiceModal" tabindex="-1" role="dialog" aria-labelledby="addServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addServiceModalLabel">Tambah Layanan Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="addServiceForm" action="{{ route('admin.pages.produk.layanan.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="name">Nama Layanan *</label>
                                <input type="text" class="form-control" id="name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Deskripsi</label>
                                <textarea class="form-control" id="description" name="description" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Harga *</label>
                                <input type="number" class="form-control" id="price" name="price" required min="0">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="image">Gambar Layanan</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="image" name="image" accept="image/*">
                                    <label class="custom-file-label" for="image">Pilih file...</label>
                                </div>
                                <small class="form-text text-muted">Format: JPG, PNG, GIF. Maks: 2MB</small>
                            </div>
                            <div class="form-group">
                                <label for="is_active">Status</label>
                                <select class="form-control" id="is_active" name="is_active">
                                    <option value="1">Aktif</option>
                                    <option value="0">Nonaktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Simpan
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Edit Layanan -->
<div class="modal fade" id="editServiceModal" tabindex="-1" role="dialog" aria-labelledby="editServiceModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editServiceModalLabel">Edit Layanan</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form id="editServiceForm" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="form-group">
                                <label for="edit_name">Nama Layanan *</label>
                                <input type="text" class="form-control" id="edit_name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="edit_description">Deskripsi</label>
                                <textarea class="form-control" id="edit_description" name="description" rows="3"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="edit_price">Harga *</label>
                                <input type="number" class="form-control" id="edit_price" name="price" required min="0">
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="edit_image">Gambar Layanan</label>
                                <div class="custom-file">
                                    <input type="file" class="custom-file-input" id="edit_image" name="image" accept="image/*">
                                    <label class="custom-file-label" for="edit_image">Pilih file...</label>
                                </div>
                                <small class="form-text text-muted">Format: JPG, PNG, GIF. Maks: 2MB</small>
                                <div class="mt-2" id="currentImagePreview"></div>
                            </div>
                            <div class="form-group">
                                <label for="edit_is_active">Status</label>
                                <select class="form-control" id="edit_is_active" name="is_active">
                                    <option value="1">Aktif</option>
                                    <option value="0">Nonaktif</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save"></i> Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Modal Media Manager -->
<div class="modal fade" id="mediaModal" tabindex="-1" role="dialog" aria-labelledby="mediaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="mediaModalLabel">Kelola Media - <span id="mediaServiceName"></span></h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header bg-primary text-white">
                                <h6 class="mb-0">Upload Media Baru</h6>
                            </div>
                            <div class="card-body">
                                <form id="uploadMediaForm" enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" id="mediaServiceId" name="service_id">
                                    <div class="form-group">
                                        <label for="media_files">Pilih File</label>
                                        <div class="custom-file">
                                            <input type="file" class="custom-file-input" id="media_files" name="media_files[]" multiple accept="image/*,video/*,.pdf,.doc,.docx">
                                            <label class="custom-file-label" for="media_files">Pilih file media...</label>
                                        </div>
                                        <small class="form-text text-muted">Maksimal 5 file, masing-masing 5MB</small>
                                    </div>
                                    <button type="submit" class="btn btn-success btn-sm">
                                        <i class="fas fa-upload"></i> Upload Media
                                    </button>
                                </form>
                            </div>
                        </div>
                        
                        <div class="card mt-3">
                            <div class="card-header bg-info text-white">
                                <h6 class="mb-0">Daftar Media</h6>
                            </div>
                            <div class="card-body">
                                <div id="mediaList" class="row">
                                    <!-- Media list akan diisi via AJAX -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-header bg-warning text-dark">
                                <h6 class="mb-0">Informasi Media</h6>
                            </div>
                            <div class="card-body">
                                <div id="mediaInfo" class="text-center">
                                    <p class="text-muted">Pilih media untuk melihat informasi</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>

<!-- Modal Image Preview -->
<div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-body text-center">
                <img src="" id="previewImage" class="img-fluid" style="max-height: 70vh;">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
            </div>
        </div>
    </div>
</div>
@endsection

