@extends('layouts.admin')
@section('title', 'Detail Pelanggan')
@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h4 class="card-title mb-0">Detail Pelanggan</h4>
                        <div>
                            <a href="{{ route('customers.edit', $customer->id) }}" class="btn btn-warning btn-sm">
                                <i class="fas fa-edit"></i> Edit
                            </a>
                            <a href="{{ route('customers.index') }}" class="btn btn-secondary btn-sm">
                                <i class="fas fa-arrow-left"></i> Kembali
                            </a>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        <!-- Customer Info -->
                        <div class="col-md-4">
                            <div class="text-center mb-4">
                                <div class="avatar-circle bg-primary text-white mx-auto mb-3" style="width: 80px; height: 80px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-size: 2rem; font-weight: bold;">
                                    {{ strtoupper(substr($customer->name, 0, 1)) }}
                                </div>
                                <h5 class="mb-1">{{ $customer->name }}</h5>
                                <p class="text-muted mb-0">{{ 'CST-' . str_pad($customer->id, 3, '0', STR_PAD_LEFT) }}</p>
                            </div>

                            <div class="card bg-light">
                                <div class="card-body">
                                    <h6 class="card-title">Informasi Kontak</h6>
                                    <div class="mb-2">
                                        <i class="fas fa-envelope text-muted me-2"></i>
                                        @if($customer->email)
                                            <a href="mailto:{{ $customer->email }}">{{ $customer->email }}</a>
                                        @else
                                            <span class="text-muted">Email tidak tersedia</span>
                                        @endif
                                    </div>
                                    <div class="mb-2">
                                        <i class="fas fa-phone text-muted me-2"></i>
                                        @if($customer->phone)
                                            <a href="tel:{{ $customer->phone }}">{{ $customer->phone }}</a>
                                        @else
                                            <span class="text-muted">Telepon tidak tersedia</span>
                                        @endif
                                    </div>
                                    <div class="mb-0">
                                        <i class="fas fa-map-marker-alt text-muted me-2"></i>
                                        <span>{{ $customer->address ?: 'Alamat tidak tersedia' }}</span>
                                    </div>
                                </div>
                            </div>

                            @if($customer->notes)
                            <div class="card bg-warning bg-opacity-10 mt-3">
                                <div class="card-body">
                                    <h6 class="card-title">
                                        <i class="fas fa-sticky-note text-warning me-1"></i>
                                        Catatan
                                    </h6>
                                    <p class="card-text mb-0">{{ $customer->notes }}</p>
                                </div>
                            </div>
                            @endif
                        </div>

                        <!-- Booking History -->
                        <div class="col-md-8">
                            <div class="d-flex justify-content-between align-items-center mb-3">
                                <h5 class="mb-0">Riwayat Booking</h5>
                                <span class="badge bg-info">
                                    Total: {{ $customer->bookings_count ?? 0 }} booking
                                </span>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-hover">
                                    <thead class="table-light">
                                        <tr>
                                            <th width="60">#</th>
                                            <th>Tanggal</th>
                                            <th>Waktu</th>
                                            <th>Layanan</th>
                                            <th>Status</th>
                                            <th>Total</th>
                                            <th width="80">Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($customer->bookings as $booking)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>
                                                <div class="small">
                                                    <div class="fw-bold">{{ $booking->booking_date->format('d M Y') }}</div>
                                                    <div class="text-muted">{{ $booking->booking_date->diffForHumans() }}</div>
                                                </div>
                                            </td>
                                            <td>
                                                <span class="badge bg-secondary">
                                                    {{ \Carbon\Carbon::parse($booking->start_time)->format('H:i') }} - 
                                                    {{ \Carbon\Carbon::parse($booking->end_time)->format('H:i') }}
                                                </span>
                                            </td>
                                            <td>
                                                <div class="small">
                                                    <div class="fw-bold">{{ $booking->service->name ?? 'N/A' }}</div>
                                                    <div class="text-muted">{{ $booking->service_owner->name ?? 'N/A' }}</div>
                                                </div>
                                            </td>
                                            <td>
                                                @php
                                                    $statusClass = match($booking->status) {
                                                        'completed' => 'success',
                                                        'confirmed' => 'info',
                                                        'pending' => 'warning',
                                                        'cancelled' => 'danger',
                                                        default => 'secondary'
                                                    };
                                                    $statusText = match($booking->status) {
                                                        'completed' => 'Selesai',
                                                        'confirmed' => 'Dikonfirmasi',
                                                        'pending' => 'Menunggu',
                                                        'cancelled' => 'Dibatalkan',
                                                        default => ucfirst($booking->status)
                                                    };
                                                @endphp
                                                <span class="badge bg-{{ $statusClass }}">{{ $statusText }}</span>
                                            </td>
                                            <td>
                                                <div class="fw-bold">Rp {{ number_format($booking->total_amount, 0, ',', '.') }}</div>
                                            </td>
                                            <td>
                                                <a href="{{ route('admin.pages.booking.show', $booking->id) }}" 
                                                   class="btn btn-sm btn-info" 
                                                   title="Lihat Detail">
                                                    <i class="fas fa-eye"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="7" class="text-center py-4">
                                                <div class="text-muted">
                                                    <i class="fas fa-calendar-times fa-2x mb-2 opacity-50"></i>
                                                    <p class="mb-0">Belum ada riwayat booking</p>
                                                </div>
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row">
                        <div class="col-md-6">
                            <small class="text-muted">
                                <i class="fas fa-clock me-1"></i>
                                Bergabung: {{ $customer->created_at->format('d M Y H:i') }}
                            </small>
                        </div>
                        <div class="col-md-6 text-end">
                            <small class="text-muted">
                                <i class="fas fa-edit me-1"></i>
                                Terakhir diupdate: {{ $customer->updated_at->format('d M Y H:i') }}
                            </small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection