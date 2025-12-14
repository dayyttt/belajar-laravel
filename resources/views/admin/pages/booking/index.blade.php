@extends('layouts.admin')

@section('title', 'Daftar Booking')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Daftar Booking</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.pages.booking.create') }}" class="btn btn-primary btn-sm">
                            <i class="fas fa-plus"></i> Booking Baru
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="GET" class="mb-3">
                        <div class="row">
                            <div class="col-md-2">
                                <select name="status" class="form-control">
                                    <option value="">Semua Status</option>
                                    <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                                    <option value="waiting_confirmation" {{ request('status') == 'waiting_confirmation' ? 'selected' : '' }}>Menunggu Konfirmasi</option>
                                    <option value="confirmed" {{ request('status') == 'confirmed' ? 'selected' : '' }}>Dikonfirmasi</option>
                                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Selesai</option>
                                    <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select name="source" class="form-control">
                                    <option value="">Semua Sumber</option>
                                    <option value="manual" {{ request('source') == 'manual' ? 'selected' : '' }}>Manual</option>
                                    <option value="whatsapp" {{ request('source') == 'whatsapp' ? 'selected' : '' }}>WhatsApp</option>
                                    <option value="phone" {{ request('source') == 'phone' ? 'selected' : '' }}>Telepon</option>
                                    <option value="app" {{ request('source') == 'app' ? 'selected' : '' }}>Mobile App</option>
                                    <option value="website" {{ request('source') == 'website' ? 'selected' : '' }}>Website</option>
                                </select>
                            </div>
                            <div class="col-md-2">
                                <select name="service_owner_id" class="form-control">
                                    <option value="">Semua Pemilik</option>
                                    @foreach($serviceOwners as $owner)
                                    <option value="{{ $owner->id }}" {{ request('service_owner_id') == $owner->id ? 'selected' : '' }}>
                                        {{ $owner->name }}
                                    </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-md-2">
                                <input type="date" name="date_from" class="form-control" 
                                       placeholder="Dari tanggal" value="{{ request('date_from') }}">
                            </div>
                            <div class="col-md-2">
                                <input type="date" name="date_to" class="form-control" 
                                       placeholder="Sampai tanggal" value="{{ request('date_to') }}">
                            </div>
                            <div class="col-md-2">
                                <button type="submit" class="btn btn-default">Filter</button>
                                <a href="{{ route('admin.pages.booking.index') }}" class="btn btn-secondary">Reset</a>
                            </div>
                        </div>
                    </form>

                    <div class="table-responsive">
                        <table class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Pelanggan</th>
                                    <th>Layanan</th>
                                    <th>Pemilik</th>
                                    <th>Jumlah</th>
                                    <th>Sumber</th>
                                    <th>Status</th>
                                    <th>PIC</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($bookings as $booking)
                                <tr>
                                    <td>
                                        {{ $booking->booking_date->format('d/m/Y') }}<br>
                                        <small>{{ $booking->start_time }} - {{ $booking->end_time }}</small>
                                    </td>
                                    <td>
                                        <strong>{{ $booking->customer_name }}</strong><br>
                                        <small class="text-muted">{{ $booking->customer_phone }}</small>
                                    </td>
                                    <td>{{ $booking->service->name ?? '-' }}</td>
                                    <td>{{ $booking->serviceOwner->name ?? '-' }}</td>
                                    <td>{{ $booking->formatted_amount }}</td>
                                    <td>
                                        <span class="badge badge-info">{{ $booking->source_label }}</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-{{ $booking->status_color }}">
                                            {{ $booking->status_label }}
                                        </span>
                                    </td>
                                    <td>{{ $booking->createdBy->name ?? '-' }}</td>
                                    <td>
                                        <a href="{{ route('admin.pages.booking.show', $booking) }}" 
                                           class="btn btn-sm btn-info">Detail</a>
                                        <a href="{{ route('admin.pages.booking.edit', $booking) }}" 
                                           class="btn btn-sm btn-warning">Edit</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                    {{ $bookings->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection