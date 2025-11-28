@extends('admin.layouts.main')

@section('title', 'Manajemen Artikel')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manajemen Artikel</h1>
        <button type="button" 
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                data-toggle="modal" 
                data-target="#createArtikelModal">
            <i class="fas fa-plus fa-sm text-white-50 mr-2"></i>
            Tambah Artikel Baru
        </button>
    </div>

    <!-- Flash Messages -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <i class="fas fa-check-circle mr-2"></i>
            {{ session('success') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    @if(session('error'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <i class="fas fa-exclamation-circle mr-2"></i>
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif

    <!-- Statistics Cards -->
    <div class="row mb-4">
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total Artikel
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Artikel::count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-newspaper fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Artikel Published
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Artikel::where('status', 'published')->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-eye fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Artikel Draft
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Artikel::where('status', 'draft')->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-edit fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Artikel Table -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Artikel</h6>
            <div class="btn-group">
                <button type="button" 
                        class="btn btn-primary btn-sm"
                        data-toggle="modal" 
                        data-target="#createArtikelModal">
                    <i class="fas fa-plus mr-1"></i>Tambah
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="artikelTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th width="50px">#</th>
                            <th>Judul Artikel</th>
                            <th width="120px">Status</th>
                            <th width="150px">Tanggal</th>
                            <th width="150px">Penulis</th>
                            <th width="180px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($artikel as $artikel)
                        <tr>
                            <td>{{ $loop->iteration + ($artikel->currentPage() - 1) * $artikel->perPage() }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    @if($artikel->image)
                                    <img src="{{ asset('storage/' . $artikel->image) }}" 
                                         alt="{{ $artikel->title }}" 
                                         class="rounded mr-3" 
                                         style="width: 60px; height: 40px; object-fit: cover;">
                                    @else
                                    <div class="bg-light rounded d-flex align-items-center justify-content-center mr-3" 
                                         style="width: 60px; height: 40px;">
                                        <i class="fas fa-image text-gray-400"></i>
                                    </div>
                                    @endif
                                    <div>
                                        <h6 class="mb-1 font-weight-bold text-gray-800">
                                            {{ Str::limit($artikel->title, 60) }}
                                        </h6>
                                        <small class="text-muted">
                                            {{ Str::limit(strip_tags($artikel->excerpt ?: $artikel->content), 80) }}
                                        </small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-{{ $artikel->status === 'published' ? 'success' : 'warning' }}">
                                    {{ $artikel->status === 'published' ? 'Published' : 'Draft' }}
                                </span>
                            </td>
                            <td>
                                <small class="text-muted">
                                    {{ $artikel->created_at->format('d/m/Y') }}<br>
                                    <span class="text-xs">{{ $artikel->created_at->format('H:i') }}</span>
                                </small>
                            </td>
                            <td>
                                <small class="text-muted">{{ $artikel->user->name }}</small>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <!-- Toggle Status Button -->
                                    <form action="{{ route('admin.pages.manajemen.artikel.toggle-status', $artikel) }}" 
                                          method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" 
                                                class="btn btn-sm btn-{{ $artikel->status === 'published' ? 'warning' : 'success' }}"
                                                data-toggle="tooltip" 
                                                title="{{ $artikel->status === 'published' ? 'Set Draft' : 'Publish' }}">
                                            <i class="fas fa-{{ $artikel->status === 'published' ? 'eye-slash' : 'eye' }}"></i>
                                        </button>
                                    </form>
                                    
                                    <!-- Edit Button -->
                                    <button type="button" 
                                            class="btn btn-sm btn-primary edit-artikel"
                                            data-toggle="modal" 
                                            data-target="#editArtikelModal"
                                            data-article-id="{{ $artikel->id }}"
                                            data-article-title="{{ $artikel->title }}"
                                            data-article-content="{{ $artikel->content }}"
                                            data-article-excerpt="{{ $artikel->excerpt }}"
                                            data-article-status="{{ $artikel->status }}"
                                            data-article-image="{{ $artikel->image }}"
                                            data-toggle="tooltip" 
                                            title="Edit Artikel">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    
                                    <!-- View Button -->
                                    <a href="{{ route('admin.pages.manajemen.artikel.show', $artikel->slug) }}" 
                                       target="_blank"
                                       class="btn btn-sm btn-info"
                                       data-toggle="tooltip" 
                                       title="Lihat Artikel">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    
                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.pages.manajemen.artikel.destroy', $artikel) }}" 
                                          method="POST" 
                                          class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="btn btn-sm btn-danger"
                                                data-toggle="tooltip" 
                                                title="Hapus Artikel">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="6" class="text-center py-4">
                                <div class="text-muted">
                                    <i class="fas fa-inbox fa-3x mb-3"></i>
                                    <p>Belum ada artikel yang dibuat.</p>
                                    <button type="button" 
                                            class="btn btn-primary mt-2"
                                            data-toggle="modal" 
                                            data-target="#createArtikelModal">
                                        <i class="fas fa-plus mr-2"></i>Buat Artikel Pertama
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($artikel->hasPages())
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="text-muted">
                    Menampilkan {{ $artikel->firstItem() }} - {{ $artikel->lastItem() }} dari {{ $artikel->total() }} artikel
                </div>
                <nav>
                    {{ $artikel->links() }}
                </nav>
            </div>
            @endif
        </div>
    </div>
</div>

<!-- Create Artikel Modal -->
<div class="modal fade" id="createArtikelModal" tabindex="-1" role="dialog" aria-labelledby="createArtikelModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createArtikelModalLabel">
                    <i class="fas fa-plus mr-2"></i>Tambah Artikel Baru
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.pages.manajemen.artikel.store') }}" method="POST" enctype="multipart/form-data" id="createArtikelForm">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Title -->
                            <div class="form-group">
                                <label for="create_title" class="font-weight-bold">Judul Artikel <span class="text-danger">*</span></label>
                                <input type="text" 
                                       name="title" 
                                       id="create_title" 
                                       class="form-control @error('title') is-invalid @enderror"
                                       value="{{ old('title') }}"
                                       placeholder="Masukkan judul artikel..."
                                       required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Content -->
                            <div class="form-group">
                                <label for="create_content" class="font-weight-bold">Konten Artikel <span class="text-danger">*</span></label>
                                <textarea name="content" 
                                          id="create_content" 
                                          rows="12"
                                          class="form-control @error('content') is-invalid @enderror"
                                          placeholder="Tulis konten artikel Anda di sini..."
                                          required>{{ old('content') }}</textarea>
                                @error('content')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Status -->
                            <div class="form-group">
                                <label for="create_status" class="font-weight-bold">Status <span class="text-danger">*</span></label>
                                <select name="status" 
                                        id="create_status" 
                                        class="form-control @error('status') is-invalid @enderror"
                                        required>
                                    <option value="draft" {{ old('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="published" {{ old('status') == 'published' ? 'selected' : '' }}>Published</option>
                                </select>
                                @error('status')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Featured Image -->
                            <div class="form-group">
                                <label for="create_image" class="font-weight-bold">Gambar Utama</label>
                                <div class="custom-file">
                                    <input type="file" 
                                           name="image" 
                                           id="create_image"
                                           class="custom-file-input @error('image') is-invalid @enderror"
                                           accept="image/*">
                                    <label class="custom-file-label" for="create_image">
                                        Pilih file gambar...
                                    </label>
                                    @error('image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <small class="form-text text-muted">
                                    Format: JPEG, PNG, JPG, GIF, WEBP. Maksimal: 2MB
                                </small>
                                <div id="create_image_preview" class="mt-2 d-none">
                                    <img src="" alt="Preview" class="img-fluid rounded" style="max-height: 150px;">
                                </div>
                            </div>

                            <!-- Excerpt -->
                            <div class="form-group">
                                <label for="create_excerpt" class="font-weight-bold">Ringkasan</label>
                                <textarea name="excerpt" 
                                          id="create_excerpt" 
                                          rows="4"
                                          class="form-control @error('excerpt') is-invalid @enderror"
                                          placeholder="Ringkasan singkat artikel...">{{ old('excerpt') }}</textarea>
                                @error('excerpt')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">
                                    Ringkasan akan ditampilkan di halaman daftar artikel.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-times mr-2"></i>Batal
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-2"></i>Simpan Artikel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Artikel Modal -->
<div class="modal fade" id="editArtikelModal" tabindex="-1" role="dialog" aria-labelledby="editArtikelModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editArtikelModalLabel">
                    <i class="fas fa-edit mr-2"></i>Edit Artikel
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data" id="editArtikelForm">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Title -->
                            <div class="form-group">
                                <label for="edit_title" class="font-weight-bold">Judul Artikel <span class="text-danger">*</span></label>
                                <input type="text" 
                                       name="title" 
                                       id="edit_title" 
                                       class="form-control"
                                       placeholder="Masukkan judul artikel..."
                                       required>
                            </div>

                            <!-- Content -->
                            <div class="form-group">
                                <label for="edit_content" class="font-weight-bold">Konten Artikel <span class="text-danger">*</span></label>
                                <textarea name="content" 
                                          id="edit_content" 
                                          rows="12"
                                          class="form-control"
                                          placeholder="Tulis konten artikel Anda di sini..."
                                          required></textarea>
                            </div>
                        </div>

                        <div class="col-md-4">
                            <!-- Status -->
                            <div class="form-group">
                                <label for="edit_status" class="font-weight-bold">Status <span class="text-danger">*</span></label>
                                <select name="status" 
                                        id="edit_status" 
                                        class="form-control"
                                        required>
                                    <option value="draft">Draft</option>
                                    <option value="published">Published</option>
                                </select>
                            </div>

                            <!-- Featured Image -->
                            <div class="form-group">
                                <label for="edit_image" class="font-weight-bold">Gambar Utama</label>
                                
                                <!-- Current Image Preview -->
                                <div id="currentImagePreview" class="mb-3">
                                    <img src="" alt="Current image" class="img-fluid rounded mb-2" style="max-height: 150px;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remove_image" id="remove_image" value="1">
                                        <label class="form-check-label text-danger" for="remove_image">
                                            Hapus gambar
                                        </label>
                                    </div>
                                </div>

                                <div class="custom-file">
                                    <input type="file" 
                                           name="image" 
                                           id="edit_image"
                                           class="custom-file-input"
                                           accept="image/*">
                                    <label class="custom-file-label" for="edit_image">
                                        Pilih file gambar baru...
                                    </label>
                                </div>
                                <small class="form-text text-muted">
                                    Format: JPEG, PNG, JPG, GIF, WEBP. Maksimal: 2MB
                                </small>
                                <div id="edit_image_preview" class="mt-2 d-none">
                                    <img src="" alt="Preview" class="img-fluid rounded" style="max-height: 150px;">
                                </div>
                            </div>

                            <!-- Excerpt -->
                            <div class="form-group">
                                <label for="edit_excerpt" class="font-weight-bold">Ringkasan</label>
                                <textarea name="excerpt" 
                                          id="edit_excerpt" 
                                          rows="4"
                                          class="form-control"
                                          placeholder="Ringkasan singkat artikel..."></textarea>
                                <small class="form-text text-muted">
                                    Ringkasan akan ditampilkan di halaman daftar artikel.
                                </small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-times mr-2"></i>Batal
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-2"></i>Update Artikel
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection