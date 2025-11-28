@extends('admin.layouts.main')
@section('title', 'Manajemen Halaman')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manajemen Halaman</h1>
        <button type="button" 
                class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"
                data-toggle="modal" 
                data-target="#createPageModal">
            <i class="fas fa-plus fa-sm text-white-50 mr-2"></i>
            Tambah Halaman Baru
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
                                Total Halaman
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Halaman::count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-alt fa-2x text-gray-300"></i>
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
                                Halaman Published
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Halaman::where('status', 'published')->count() }}
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
                                Halaman Draft
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Halaman::where('status', 'draft')->count() }}
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

    <!-- Pages Table -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Halaman</h6>
            <div class="btn-group">
                <button type="button" 
                        class="btn btn-primary btn-sm"
                        data-toggle="modal" 
                        data-target="#createPageModal">
                    <i class="fas fa-plus mr-1"></i>Tambah
                </button>
            </div>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered table-hover" id="pagesTable" width="100%" cellspacing="0">
                    <thead class="thead-light">
                        <tr>
                            <th width="50px">#</th>
                            <th>Judul Halaman</th>
                            <th width="120px">Status</th>
                            <th width="150px">Slug</th>
                            <th width="150px">Tanggal</th>
                            <th width="180px" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse($halaman as $item)
                        <tr>
                            <td>{{ $loop->iteration + ($halaman->currentPage() - 1) * $halaman->perPage() }}</td>
                            <td>
                                <div class="d-flex align-items-center">
                                    @if($halaman->featured_image)
                                    <img src="{{ asset('storage/' . $halaman->featured_image) }}" 
                                         alt="{{ $halaman->title }}" 
                                         class="rounded mr-3" 
                                         style="width: 60px; height: 40px; object-fit: cover;">
                                    @else
                                    <div class="bg-light rounded d-flex align-items-center justify-content-center mr-3" 
                                         style="width: 60px; height: 40px;">
                                        <i class="fas fa-file-alt text-gray-400"></i>
                                    </div>
                                    @endif
                                    <div>
                                        <h6 class="mb-1 font-weight-bold text-gray-800">
                                            {{ Str::limit($item->title, 60) }}
                                        </h6>
                                        <small class="text-muted">
                                            {{ $halaman->getExcerpt(80) }}
                                        </small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <span class="badge badge-{{ $item->status === 'published' ? 'success' : 'warning' }}">
                                    {{ $item->status === 'published' ? 'Published' : 'Draft' }}
                                </span>
                            </td>
                            <td>
                                <code class="text-sm">{{ $item->slug }}</code>
                            </td>
                            <td>
                                <small class="text-muted">
                                    {{ $item->created_at->format('d/m/Y') }}<br>
                                    <span class="text-xs">{{ $item->created_at->format('H:i') }}</span>
                                </small>
                            </td>
                            <td>
                                <div class="d-flex justify-content-center gap-1">
                                    <!-- Toggle Status Button -->
                                    <form action="{{ route('admin.manajemen.halaman.toggle-status', $halaman) }}" 
                                          method="POST" class="d-inline">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" 
                                                class="btn btn-sm btn-{{ $halaman->status === 'published' ? 'warning' : 'success' }}"
                                                data-toggle="tooltip" 
                                                title="{{ $halaman->status === 'published' ? 'Set Draft' : 'Publish' }}">
                                            <i class="fas fa-{{ $halaman->status === 'published' ? 'eye-slash' : 'eye' }}"></i>
                                        </button>
                                    </form>
                                    
                                    <!-- Edit Button -->
                                    <button type="button" 
                                            class="btn btn-sm btn-primary edit-page"
                                            data-toggle="modal" 
                                            data-target="#editPageModal"
                                            data-page-id="{{ $halaman->id }}"
                                            data-page-title="{{ $halaman->title }}"
                                            data-page-content="{{ $halaman->content }}"
                                            data-page-slug="{{ $halaman->slug }}"
                                            data-page-meta-title="{{ $halaman->meta_title }}"
                                            data-page-meta-description="{{ $halaman->meta_description }}"
                                            data-page-status="{{ $halaman->status }}"
                                            data-page-featured-image="{{ $halaman->featured_image }}"
                                            data-toggle="tooltip" 
                                            title="Edit Halaman">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    
                                    <!-- View Button -->
                                    <a href="{{ url('/' . $halaman->slug) }}" 
                                       target="_blank"
                                       class="btn btn-sm btn-info"
                                       data-toggle="tooltip" 
                                       title="Lihat Halaman">
                                        <i class="fas fa-external-link-alt"></i>
                                    </a>
                                    
                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.manajemen.halaman.destroy', $halaman) }}" 
                                          method="POST" 
                                          class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="btn btn-sm btn-danger"
                                                data-toggle="tooltip" 
                                                title="Hapus Halaman">
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
                                    <p>Belum ada halaman yang dibuat.</p>
                                    <button type="button" 
                                            class="btn btn-primary mt-2"
                                            data-toggle="modal" 
                                            data-target="#createPageModal">
                                        <i class="fas fa-plus mr-2"></i>Buat Halaman Pertama
                                    </button>
                                </div>
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>

            <!-- Pagination -->
            @if($halaman->count() > 0)
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="text-muted">
                    Menampilkan {{ $halaman->firstItem() }} - {{ $halaman->lastItem() }} dari {{ $halaman->total() }} halaman
                </div>
                <nav>
                    {{ $halaman->links() }}
                </nav>
            </div>
            @endif
        </div>
    </div>
</div>

<!-- Create Page Modal -->
<div class="modal fade" id="createPageModal" tabindex="-1" role="dialog" aria-labelledby="createPageModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="createPageModalLabel">
                    <i class="fas fa-plus mr-2"></i>Tambah Halaman Baru
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.manajemen.halaman.store') }}" method="POST" enctype="multipart/form-data" id="createPageForm">
                @csrf
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Title -->
                            <div class="form-group">
                                <label for="create_title" class="font-weight-bold">Judul Halaman <span class="text-danger">*</span></label>
                                <input type="text" 
                                       name="title" 
                                       id="create_title" 
                                       class="form-control @error('title') is-invalid @enderror"
                                       value="{{ old('title') }}"
                                       placeholder="Masukkan judul halaman..."
                                       required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            <!-- Slug -->
                            <div class="form-group">
                                <label for="create_slug" class="font-weight-bold">Slug <span class="text-danger">*</span></label>
                                <input type="text" 
                                       name="slug" 
                                       id="create_slug" 
                                       class="form-control @error('slug') is-invalid @enderror"
                                       value="{{ old('slug') }}"
                                       placeholder="contoh: tentang-kami"
                                       required>
                                @error('slug')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">
                                    URL-friendly version of the title. Huruf kecil, tanpa spasi, gunakan hyphen.
                                </small>
                            </div>

                            <!-- Content -->
                            <div class="form-group">
                                <label for="create_content" class="font-weight-bold">Konten Halaman <span class="text-danger">*</span></label>
                                <textarea name="content" 
                                          id="create_content" 
                                          rows="12"
                                          class="form-control @error('content') is-invalid @enderror"
                                          placeholder="Tulis konten halaman Anda di sini..."
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
                                <label for="create_featured_image" class="font-weight-bold">Gambar Utama</label>
                                <div class="custom-file">
                                    <input type="file" 
                                           name="featured_image" 
                                           id="create_featured_image"
                                           class="custom-file-input @error('featured_image') is-invalid @enderror"
                                           accept="image/*">
                                    <label class="custom-file-label" for="create_featured_image">
                                        Pilih file gambar...
                                    </label>
                                    @error('featured_image')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                                <small class="form-text text-muted">
                                    Format: JPEG, PNG, JPG, GIF, WEBP. Maksimal: 2MB
                                </small>
                                <div id="create_featured_image_preview" class="mt-2 d-none">
                                    <img src="" alt="Preview" class="img-fluid rounded" style="max-height: 150px;">
                                </div>
                            </div>

                            <!-- Meta Title -->
                            <div class="form-group">
                                <label for="create_meta_title" class="font-weight-bold">Meta Title</label>
                                <input type="text" 
                                       name="meta_title" 
                                       id="create_meta_title" 
                                       class="form-control @error('meta_title') is-invalid @enderror"
                                       value="{{ old('meta_title') }}"
                                       placeholder="Meta title untuk SEO...">
                                @error('meta_title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">
                                    Judul yang ditampilkan di search engine (max 60 karakter).
                                </small>
                            </div>

                            <!-- Meta Description -->
                            <div class="form-group">
                                <label for="create_meta_description" class="font-weight-bold">Meta Description</label>
                                <textarea name="meta_description" 
                                          id="create_meta_description" 
                                          rows="3"
                                          class="form-control @error('meta_description') is-invalid @enderror"
                                          placeholder="Deskripsi untuk SEO...">{{ old('meta_description') }}</textarea>
                                @error('meta_description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                                <small class="form-text text-muted">
                                    Deskripsi yang ditampilkan di search engine (max 160 karakter).
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
                        <i class="fas fa-save mr-2"></i>Simpan Halaman
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Page Modal -->
<div class="modal fade" id="editHalamanModal" tabindex="-1" role="dialog" aria-labelledby="editHalamanModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editHalamanModalLabel">
                    <i class="fas fa-edit mr-2"></i>Edit Halaman
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" enctype="multipart/form-data" id="editHalamanForm">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-8">
                            <!-- Title -->
                            <div class="form-group">
                                <label for="edit_title" class="font-weight-bold">Judul Halaman <span class="text-danger">*</span></label>
                                <input type="text" 
                                       name="title" 
                                       id="edit_title" 
                                       class="form-control"
                                       placeholder="Masukkan judul halaman..."
                                       required>
                            </div>

                            <!-- Slug -->
                            <div class="form-group">
                                <label for="edit_slug" class="font-weight-bold">Slug <span class="text-danger">*</span></label>
                                <input type="text" 
                                       name="slug" 
                                       id="edit_slug" 
                                       class="form-control"
                                       placeholder="contoh: tentang-kami"
                                       required>
                            </div>

                            <!-- Content -->
                            <div class="form-group">
                                <label for="edit_content" class="font-weight-bold">Konten Halaman <span class="text-danger">*</span></label>
                                <textarea name="content" 
                                          id="edit_content" 
                                          rows="12"
                                          class="form-control"
                                          placeholder="Tulis konten halaman Anda di sini..."
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
                                <label for="edit_featured_image" class="font-weight-bold">Gambar Utama</label>
                                
                                <!-- Current Image Preview -->
                                <div id="currentFeaturedImagePreview" class="mb-3">
                                    <img src="" alt="Current image" class="img-fluid rounded mb-2" style="max-height: 150px;">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remove_featured_image" id="remove_featured_image" value="1">
                                        <label class="form-check-label text-danger" for="remove_featured_image">
                                            Hapus gambar
                                        </label>
                                    </div>
                                </div>

                                <div class="custom-file">
                                    <input type="file" 
                                           name="featured_image" 
                                           id="edit_featured_image"
                                           class="custom-file-input"
                                           accept="image/*">
                                    <label class="custom-file-label" for="edit_featured_image">
                                        Pilih file gambar baru...
                                    </label>
                                </div>
                                <small class="form-text text-muted">
                                    Format: JPEG, PNG, JPG, GIF, WEBP. Maksimal: 2MB
                                </small>
                                <div id="edit_featured_image_preview" class="mt-2 d-none">
                                    <img src="" alt="Preview" class="img-fluid rounded" style="max-height: 150px;">
                                </div>
                            </div>

                            <!-- Meta Title -->
                            <div class="form-group">
                                <label for="edit_meta_title" class="font-weight-bold">Meta Title</label>
                                <input type="text" 
                                       name="meta_title" 
                                       id="edit_meta_title" 
                                       class="form-control"
                                       placeholder="Meta title untuk SEO...">
                                <small class="form-text text-muted">
                                    Judul yang ditampilkan di search engine (max 60 karakter).
                                </small>
                            </div>

                            <!-- Meta Description -->
                            <div class="form-group">
                                <label for="edit_meta_description" class="font-weight-bold">Meta Description</label>
                                <textarea name="meta_description" 
                                          id="edit_meta_description" 
                                          rows="3"
                                          class="form-control"
                                          placeholder="Deskripsi untuk SEO..."></textarea>
                                <small class="form-text text-muted">
                                    Deskripsi yang ditampilkan di search engine (max 160 karakter).
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
                        <i class="fas fa-save mr-2"></i>Update Halaman
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection