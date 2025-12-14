@extends('admin.layouts.main')

@section('title', 'Edit Time Slot')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <i class="fas fa-clock mr-2"></i>Edit Time Slot
        </h1>
        <a href="{{ route('admin.pages.ketersediaan.time-slots.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left mr-1"></i> Kembali
        </a>
    </div>

    <!-- Slot Info Card -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Informasi Time Slot</h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-6">
                    <p><strong>Jadwal:</strong> {{ $timeSlot->schedule->title }}</p>
                    <p><strong>Layanan:</strong> {{ $timeSlot->schedule->service->name }}</p>
                    <p><strong>Pemilik Jasa:</strong> {{ $timeSlot->schedule->serviceOwner->brand_name }}</p>
                </div>
                <div class="col-md-6">
                    <p><strong>Tanggal:</strong> {{ $timeSlot->start_datetime->format('d M Y') }}</p>
                    <p><strong>Waktu:</strong> {{ $timeSlot->start_datetime->format('H:i') }} - {{ $timeSlot->end_datetime->format('H:i') }}</p>
                    <p><strong>Durasi:</strong> {{ $timeSlot->duration_minutes }} menit</p>
                </div>
            </div>
            @if($timeSlot->schedule->description)
                <div class="mt-3">
                    <p><strong>Deskripsi Jadwal:</strong></p>
                    <p class="text-muted">{{ $timeSlot->schedule->description }}</p>
                </div>
            @endif
        </div>
    </div>

    <!-- Edit Form -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Time Slot</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.pages.ketersediaan.time-slots.update', $timeSlot->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="status" class="form-label">
                                <i class="fas fa-toggle-on mr-1"></i>Status <span class="text-danger">*</span>
                            </label>
                            <select class="form-control @error('status') is-invalid @enderror" 
                                    id="status" name="status" required>
                                <option value="available" {{ old('status', $timeSlot->status) == 'available' ? 'selected' ' }}>Tersedia</option>
                                <option value="booked" {{ old('status', $timeSlot->status) == 'booked' ? 'selected' : '' }}>Dibooking</option>
                                <option value="confirmed" {{ old('status', $timeSlot->status) == 'confirmed' ? 'selected' : '' }}>Dikonfirmasi</option>
                                <option value="cancelled" {{ old('status', $timeSlot->status) == 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
                                <option value="blocked" {{ old('status', $timeSlot->status) == 'blocked' ? 'selected' : '' }}>Diblokir</option>
                            </select>
                            @error('status')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="price" class="form-label">
                                <i class="fas fa-tag mr-1"></i>Harga
                            </label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Rp</span>
                                </div>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" 
                                       id="price" name="price" 
                                       value="{{ old('price', $timeSlot->price) }}" 
                                       min="0" step="0.01" placeholder="0.00">
                            </div>
                            @error('price')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label for="notes" class="form-label">
                        <i class="fas fa-sticky-note mr-1"></i>Catatan
                    </label>
                    <textarea class="form-control @error('notes') is-invalid @enderror" 
                              id="notes" name="notes" rows="4"
                              placeholder="Tambahkan catatan untuk time slot ini...">{{ old('notes', $timeSlot->notes) }}</textarea>
                    @error('notes')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror
                </div>

                @if($timeSlot->bookedBy)
                <div class="alert alert-info">
                    <h6><i class="fas fa-info-circle mr-2"></i>Informasi Booking</h6>
                    <p class="mb-0">
                        <strong>Dibooking oleh:</strong> {{ $timeSlot->bookedBy->name }}<br>
                        <strong>Reference:</strong> {{ $timeSlot->booking_reference }}<br>
                        <strong>Email:</strong> {{ $timeSlot->bookedBy->email }}
                    </p>
                </div>
                @endif

                <div class="row mt-4">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save mr-2"></i> Update Time Slot
                        </button>
                        <a href="{{ route('admin.pages.ketersediaan.time-slots.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times mr-2"></i> Batal
                        </a>
                        @if(in_array($timeSlot->status, ['booked', 'confirmed']))
                            <form action="{{ route('admin.pages.ketersediaan.time-slots.cancel', $timeSlot->id) }}" 
                                  method="POST" class="d-inline">
                                @csrf
                                <button type="submit" class="btn btn-warning" 
                                        onclick="return confirm('Batalkan booking ini?')">
                                    <i class="fas fa-times mr-2"></i> Batalkan Booking
                                </button>
                            </form>
                        @endif
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection