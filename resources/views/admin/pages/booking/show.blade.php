@extends('layouts.admin')

@section('title', 'Detail Booking')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <!-- Booking Details -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Detail Booking #{{ $booking->id }}</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.pages.booking.edit', $booking) }}" class="btn btn-warning btn-sm">
                            <i class="fas fa-edit"></i> Edit
                        </a>
                        <a href="{{ route('admin.pages.booking.index') }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <h5>Informasi Pelanggan</h5>
                            <table class="table table-sm">
                                <tr>
                                    <td><strong>Nama:</strong></td>
                                    <td>{{ $booking->customer_name }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Email:</strong></td>
                                    <td>{{ $booking->customer_email }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Telepon:</strong></td>
                                    <td>{{ $booking->customer_phone }}</td>
                                </tr>
                            </table>
                        </div>
                        <div class="col-md-6">
                            <h5>Informasi Booking</h5>
                            <table class="table table-sm">
                                <tr>
                                    <td><strong>Tanggal:</strong></td>
                                    <td>{{ $booking->booking_date->format('d/m/Y') }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Waktu:</strong></td>
                                    <td>{{ $booking->start_time }} - {{ $booking->end_time }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Layanan:</strong></td>
                                    <td>{{ $booking->service->name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Pemilik:</strong></td>
                                    <td>{{ $booking->serviceOwner->name ?? '-' }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Sumber:</strong></td>
                                    <td><span class="badge badge-info">{{ $booking->source_label }}</span></td>
                                </tr>
                                <tr>
                                    <td><strong>Status:</strong></td>
                                    <td>
                                        <span class="badge badge-{{ $booking->status_color }}">
                                            {{ $booking->status_label }}
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td><strong>Total:</strong></td>
                                    <td>{{ $booking->formatted_amount }}</td>
                                </tr>
                            </table>
                        </div>
                    </div>

                    @if($booking->customer_notes || $booking->internal_notes)
                    <div class="row mt-3">
                        <div class="col-md-12">
                            <h5>Catatan</h5>
                            @if($booking->customer_notes)
                            <div class="alert alert-info">
                                <strong>Catatan Pelanggan:</strong><br>
                                {{ $booking->customer_notes }}
                            </div>
                            @endif
                            @if($booking->internal_notes)
                            <div class="alert alert-warning">
                                <strong>Catatan Internal:</strong><br>
                                {{ $booking->internal_notes }}
                            </div>
                            @endif
                        </div>
                    </div>
                    @endif
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <!-- Update Status -->
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Update Status</h3>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.pages.booking.update.status', $booking) }}">
                        @csrf
                        <div class="form-group">
                            <label>Status</label>
                            <select name="status" class="form-control" required>
                                <option value="draft" {{ $booking->status == 'draft' ? 'selected' : '' }}>Draft</option>
                                <option value="waiting_confirmation" {{ $booking->status == 'waiting_confirmation' ? 'selected' : '' }}>Menunggu Konfirmasi</option>
                                <option value="confirmed" {{ $booking->status == 'confirmed' ? 'selected' : '' }}>Dikonfirmasi</option>
                                <option value="completed" {{ $booking->status == 'completed' ? 'selected' : '' }}>Selesai</option>
                                <option value="cancelled" {{ $booking->status == 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Catatan</label>
                            <textarea name="notes" class="form-control" rows="3"
                                      placeholder="Tambahkan catatan untuk perubahan status"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Status</button>
                    </form>
                </div>
            </div>

            <!-- Activity Log -->
            <div class="card mt-3">
                <div class="card-header">
                    <h3 class="card-title">Log Aktivitas</h3>
                </div>
                <div class="card-body">
                    @foreach($booking->activities as $activity)
                    <div class="mb-2">
                        <small class="text-muted">{{ $activity->created_at->format('d/m/Y H:i') }}</small><br>
                        <strong>{{ $activity->user->name ?? 'System' }}</strong> - {{ $activity->description }}
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection