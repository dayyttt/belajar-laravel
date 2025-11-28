@extends('admin.layouts.main')
@section('title', 'Manajemen Media')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Manajemen Media</h1>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#uploadMediaModal">
            <i class="fas fa-upload mr-1"></i> Upload Media
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
        <div class="col-xl-2 col-md-4 mb-4">
            <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                Total File
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Media::count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-4 mb-4">
            <div class="card border-left-success shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-success text-uppercase mb-1">
                                Gambar
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Media::where('mime_type', 'like', 'image/%')->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-image fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-4 mb-4">
            <div class="card border-left-info shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-info text-uppercase mb-1">
                                Video
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Media::where('mime_type', 'like', 'video/%')->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-video fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-4 mb-4">
            <div class="card border-left-warning shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                                Dokumen
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Media::whereIn('mime_type', [
                                    'application/pdf',
                                    'application/msword',
                                    'application/vnd.openxmlformats-officedocument.wordprocessingml.document'
                                ])->count() }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-file-alt fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-2 col-md-4 mb-4">
            <div class="card border-left-secondary shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                                Total Size
                            </div>
                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                {{ \App\Models\Media::sum('file_size') > 0 ? 
                                    number_format(\App\Models\Media::sum('file_size') / 1048576, 2) . ' MB' : '0 MB' }}
                            </div>
                        </div>
                        <div class="col-auto">
                            <i class="fas fa-database fa-2x text-gray-300"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Media Library -->
    <div class="card shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between align-items-center">
            <h6 class="m-0 font-weight-bold text-primary">Library Media</h6>
            <div class="btn-group">
                <button type="button" 
                        class="btn btn-primary btn-sm"
                        data-toggle="modal" 
                        data-target="#uploadMediaModal">
                    <i class="fa fa-upload mr-1"></i>Upload
                </button>
                <button type="button" class="btn btn-danger btn-sm" id="bulkDeleteBtn" style="display: none;">
                    <i class="fa fa-trash mr-1"></i>Hapus Terpilih
                </button>
            </div>
        </div>
        <div class="card-body">
            <!-- Filter Options -->
            <div class="row mb-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <select class="form-control form-control-sm" id="filterType">
                            <option value="">Semua Tipe</option>
                            <option value="image">Gambar</option>
                            <option value="video">Video</option>
                            <option value="document">Dokumen</option>
                            <option value="audio">Audio</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <input type="text" class="form-control form-control-sm" id="searchMedia" placeholder="Cari media...">
                    </div>
                </div>
            </div>

            <!-- Media Grid -->
            <div class="row" id="mediaGrid">
                @forelse($media as $item)
                <div class="col-xl-2 col-lg-3 col-md-4 col-sm-6 mb-4 media-item" data-type="{{ $item->getFileType() }}">
                    <div class="card media-card h-100">
                        <div class="card-body p-2 text-center">
                            <!-- Checkbox for bulk actions -->
                            <div class="custom-control custom-checkbox media-checkbox">
                                <input type="checkbox" class="custom-control-input media-select" 
                                       id="media_{{ $item->id }}" value="{{ $item->id }}">
                                <label class="custom-control-label" for="media_{{ $item->id }}"></label>
                            </div>

                            <!-- Media Preview -->
                            <div class="media-preview mb-2">
                                @if($item->isImage())
                                    <img src="{{ $item->file_url }}" 
                                         alt="{{ $item->alt_text ?: $item->title }}" 
                                         class="img-fluid rounded" 
                                         style="max-height: 120px; object-fit: cover;">
                                @else
                                    <div class="file-icon text-center py-3">
                                        <i class="{{ $item->getFileIcon() }} fa-3x text-muted"></i>
                                    </div>
                                @endif
                            </div>

                            <!-- Media Info -->
                            <div class="media-info">
                                <h6 class="media-title text-truncate small font-weight-bold mb-1" 
                                    title="{{ $item->title ?: $item->original_name }}">
                                    {{ $item->title ?: $item->original_name }}
                                </h6>
                                <div class="media-meta text-xs text-muted">
                                    <div>{{ $item->getFormattedSize() }}</div>
                                    <div>{{ strtoupper($item->extension) }} • {{ $item->getHumanReadableType() }}</div>
                                    <div>{{ $item->created_at->format('d/m/Y') }}</div>
                                </div>
                            </div>

                            <!-- Action Buttons -->
                            <div class="media-actions mt-2">
                                <div class="btn-group btn-group-sm w-100">
                                    <!-- View Button -->
                                    @if($item->isImage() || $item->isVideo())
                                    <button type="button" 
                                            class="btn btn-info view-media"
                                            data-media-url="{{ $item->file_url }}"
                                            data-media-type="{{ $item->getFileType() }}"
                                            data-toggle="tooltip" 
                                            title="Lihat">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    @else
                                    <a href="{{ $item->file_url }}" 
                                       target="_blank"
                                       class="btn btn-info"
                                       data-toggle="tooltip" 
                                       title="Download">
                                        <i class="fas fa-download"></i>
                                    </a>
                                    @endif
                                    
                                    <!-- Edit Button -->
                                    <button type="button" 
                                            class="btn btn-primary edit-media"
                                            data-toggle="modal" 
                                            data-target="#editMediaModal"
                                            data-media-id="{{ $item->id }}"
                                            data-media-title="{{ $item->title }}"
                                            data-media-description="{{ $item->description }}"
                                            data-media-alt-text="{{ $item->alt_text }}"
                                            data-toggle="tooltip" 
                                            title="Edit">
                                        <i class="fas fa-edit"></i>
                                    </button>
                                    
                                    <!-- Delete Button -->
                                    <form action="{{ route('admin.manajemen.media.destroy', $item) }}" 
                                          method="POST" 
                                          class="d-inline delete-form">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" 
                                                class="btn btn-danger"
                                                data-toggle="tooltip" 
                                                title="Hapus">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12 text-center py-5">
                    <div class="text-muted">
                        <i class="fa fa-folder-open fa-4x mb-3"></i>
                        <h4>Belum ada media</h4>
                        <p>Upload file pertama Anda untuk memulai.</p>
                        <button type="button" 
                                class="btn btn-primary mt-2"
                                data-toggle="modal" 
                                data-target="#uploadMediaModal">
                            <i class="fas fa-upload mr-2"></i>Upload Media Pertama
                        </button>
                    </div>
                </div>
                @endforelse
            </div>

            <!-- Pagination -->
            @if($media->hasPages())
            <div class="d-flex justify-content-between align-items-center mt-4">
                <div class="text-muted">
                    Menampilkan {{ $media->firstItem() }} - {{ $media->lastItem() }} dari {{ $media->total() }} media
                </div>
                <nav>
                    {{ $media->links() }}
                </nav>
            </div>
            @endif
        </div>
    </div>
</div>

<!-- Upload Media Modal -->
<div class="modal fade" id="uploadMediaModal" tabindex="-1" role="dialog" aria-labelledby="uploadMediaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="uploadMediaModalLabel">
                    <i class="fas fa-upload mr-2"></i>Upload Media
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('admin.manajemen.media.store') }}" method="POST" enctype="multipart/form-data" id="uploadMediaForm">
                @csrf
                <div class="modal-body">
                    <!-- File Upload -->
                    <div class="form-group">
                        <label for="files" class="font-weight-bold">Pilih File <span class="text-danger">*</span></label>
                        <div class="custom-file">
                            <input type="file" 
                                   name="files[]" 
                                   id="files"
                                   class="custom-file-input"
                                   multiple
                                   accept="image/*,video/*,audio/*,.pdf,.doc,.docx,.xls,.xlsx"
                                   required>
                            <label class="custom-file-label" for="files">
                                Pilih file (multiple)...
                            </label>
                        </div>
                        <small class="form-text text-muted">
                            Format yang didukung: Gambar (JPEG, PNG, GIF, WEBP), Video (MP4, AVI, MOV), 
                            Audio (MP3, WAV), Dokumen (PDF, DOC, DOCX, XLS, XLSX). Maksimal 10MB per file.
                        </small>
                    </div>

                    <!-- File Preview -->
                    <div id="filePreview" class="mt-3 d-none">
                        <h6 class="font-weight-bold">Preview File:</h6>
                        <div id="previewContainer" class="row"></div>
                    </div>

                    <!-- Title -->
                    <div class="form-group">
                        <label for="upload_title" class="font-weight-bold">Judul (Opsional)</label>
                        <input type="text" 
                               name="title" 
                               id="upload_title" 
                               class="form-control"
                               placeholder="Judul untuk file...">
                        <small class="form-text text-muted">
                            Jika kosong, akan menggunakan nama file.
                        </small>
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="upload_description" class="font-weight-bold">Deskripsi (Opsional)</label>
                        <textarea name="description" 
                                  id="upload_description" 
                                  rows="3"
                                  class="form-control"
                                  placeholder="Deskripsi file..."></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-times mr-2"></i>Batal
                    </button>
                    <button type="submit" class="btn btn-primary" id="uploadSubmitBtn">
                        <i class="fas fa-upload mr-2"></i>Upload File
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Media Modal -->
<div class="modal fade" id="editMediaModal" tabindex="-1" role="dialog" aria-labelledby="editMediaModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editMediaModalLabel">
                    <i class="fas fa-edit mr-2"></i>Edit Media
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="" method="POST" id="editMediaForm">
                @csrf
                @method('PUT')
                <div class="modal-body">
                    <!-- Title -->
                    <div class="form-group">
                        <label for="edit_title" class="font-weight-bold">Judul</label>
                        <input type="text" 
                               name="title" 
                               id="edit_title" 
                               class="form-control"
                               placeholder="Judul media...">
                    </div>

                    <!-- Description -->
                    <div class="form-group">
                        <label for="edit_description" class="font-weight-bold">Deskripsi</label>
                        <textarea name="description" 
                                  id="edit_description" 
                                  rows="3"
                                  class="form-control"
                                  placeholder="Deskripsi media..."></textarea>
                    </div>

                    <!-- Alt Text -->
                    <div class="form-group">
                        <label for="edit_alt_text" class="font-weight-bold">Alt Text</label>
                        <input type="text" 
                               name="alt_text" 
                               id="edit_alt_text" 
                               class="form-control"
                               placeholder="Teks alternatif untuk aksesibilitas...">
                        <small class="form-text text-muted">
                            Digunakan untuk aksesibilitas dan SEO.
                        </small>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">
                        <i class="fas fa-times mr-2"></i>Batal
                    </button>
                    <button type="submit" class="btn btn-primary">
                        <i class="fas fa-save mr-2"></i>Update Media
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- View Media Modal -->
<div class="modal fade" id="viewMediaModal" tabindex="-1" role="dialog" aria-labelledby="viewMediaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewMediaModalLabel">Preview Media</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center">
                <div id="mediaViewer"></div>
            </div>
        </div>
    </div>
</div>

<!-- Bulk Delete Form -->
<form action="{{ route('admin.manajemen.media.bulk-destroy') }}" method="POST" id="bulkDeleteForm">
    @csrf
    @method('DELETE')
    <input type="hidden" name="selected_media" id="selectedMediaInput">
</form>
@endsection

