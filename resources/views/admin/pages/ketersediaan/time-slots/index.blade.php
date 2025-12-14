@extends('admin.layouts.main')

@section('title', 'Manajemen Time Slots')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <i class="fas fa-clock mr-2"></i>Manajemen Time Slots
        </h1>
        <div>
            <a href="{{ route('admin.pages.ketersediaan.availability.calendar') }}" class="btn btn-info btn-sm">
                <i class="fas fa-calendar mr-1"></i> Lihat Kalender
            </a>
        </div>
    </div>

    <!-- Filters -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Filter Time Slots</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.pages.ketersediaan.time-slots.index') }}" method="GET">
                <div class="row">
                    <div class="col-md-3">
                        <label class="form-label text-sm">Status</label>
                        <select name="status" class="form-control form-control-sm">
                            <option value="">Semua Status</option>
                            <option value="available" {{ request('status') == 'available' ? 'selected' : '' }}>Tersedia</option>
                            <option value="booked" {{ request('status') == 'booked' ? 'selected' : '' }}>Dibooking</option>
                            <option value="confirmed" {{ request('status') == 'confirmed' ? 'selected' : '' }}>Dikonfirmasi</option>
                            <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
                            <option value="blocked" {{ request('status') == 'blocked' ? 'selected' : '' }}>Diblokir</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label text-sm">Tanggal</label>
                        <input type="date" name="date" class="form-control form-control-sm" 
                               value="{{ request('date') }}">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label text-sm">Pemilik Jasa</label>
                        <select name="service_owner_id" class="form-control form-control-sm">
                            <option value="">Semua Pemilik Jasa</option>
                            @foreach(\App\Models\ServiceOwner::all() as $owner)
                                <option value="{{ $owner->id }}" {{ request('service_owner_id') == $owner->id ? 'selected' : '' }}>
                                    {{ $owner->brand_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <label class="form-label text-sm">&nbsp;</label>
                        <div>
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fas fa-filter mr-1"></i> Filter
                            </button>
                            <a href="{{ route('admin.pages.ketersediaan.time-slots.index') }}" class="btn btn-secondary btn-sm">
                                <i class="fas fa-times mr-1"></i> Reset
                            </a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Time Slots Table -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Daftar Time Slots</h6>
        </div>
        <div class="card-body">
            @if($timeSlots->count() > 0)
                <div class="table-responsive">
                    <table class="table table-hover" id="timeSlotsTable">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Jadwal</th>
                                <th>Layanan</th>
                                <th>Pemilik Jasa</th>
                                <th>Tanggal & Waktu</th>
                                <th>Durasi</th>
                                <th>Status</th>
                                <th>Pelanggan</th>
                                <th>Harga</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($timeSlots as $slot)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>
                                    <strong>{{ $slot->schedule->title }}</strong>
                                    <br><small class="text-muted">{{ Str::limit($slot->schedule->description, 30) }}</small>
                                </td>
                                <td>{{ $slot->schedule->service->name }}</td>
                                <td>{{ $slot->schedule->serviceOwner->brand_name }}</td>
                                <td>
                                    <div>
                                        <i class="fas fa-calendar mr-1"></i>{{ $slot->start_datetime->format('d M Y') }}
                                    </div>
                                    <div>
                                        <i class="fas fa-clock mr-1"></i>{{ $slot->start_datetime->format('H:i') }} - {{ $slot->end_datetime->format('H:i') }}
                                    </div>
                                </td>
                                <td>{{ $slot->duration_minutes }} menit</td>
                                <td>
                                    @switch($slot->status)
                                        @case('available')
                                            <span class="badge badge-success">Tersedia</span>
                                            @break
                                        @case('booked')
                                            <span class="badge badge-warning">Dibooking</span>
                                            @break
                                        @case('confirmed')
                                            <span class="badge badge-info">Dikonfirmasi</span>
                                            @break
                                        @case('cancelled')
                                            <span class="badge badge-danger">Dibatalkan</span>
                                            @break
                                        @case('blocked')
                                            <span class="badge badge-dark">Diblokir</span>
                                            @break
                                    @endswitch
                                </td>
                                <td>
                                    @if($slot->bookedBy)
                                        {{ $slot->bookedBy->name }}
                                        <br><small class="text-muted">{{ $slot->booking_reference }}</small>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    @if($slot->price)
                                        <span class="badge badge-primary">Rp {{ number_format($slot->price, 0, ',', '.') }}</span>
                                    @else
                                        <span class="text-muted">-</span>
                                    @endif
                                </td>
                                <td>
                                    <div class="btn-group btn-group-sm" role="group">
                                        <a href="{{ route('admin.pages.ketersediaan.time-slots.edit', $slot->id) }}" 
                                           class="btn btn-outline-warning" title="Edit">
                                            <i class="fas fa-edit"></i>
                                        </a>
                                        @if($slot->status == 'booked')
                                            <form action="{{ route('admin.pages.ketersediaan.time-slots.confirm', $slot->id) }}" 
                                                  method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-success" 
                                                        title="Konfirmasi" onclick="return confirm('Konfirmasi booking ini?')">
                                                    <i class="fas fa-check"></i>
                                                </button>
                                            </form>
                                        @endif
                                        @if(in_array($slot->status, ['booked', 'confirmed']))
                                            <form action="{{ route('admin.pages.ketersediaan.time-slots.cancel', $slot->id) }}" 
                                                  method="POST" class="d-inline">
                                                @csrf
                                                <button type="submit" class="btn btn-outline-danger" 
                                                        title="Batalkan" onclick="return confirm('Batalkan booking ini?')">
                                                    <i class="fas fa-times"></i>
                                                </button>
                                            </form>
                                        @endif
                                        <form action="{{ route('admin.pages.ketersediaan.time-slots.destroy', $slot->id) }}" 
                                              method="POST" class="d-inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-outline-danger" 
                                                    title="Hapus" onclick="return confirm('Hapus time slot ini?')">
                                                <i class="fas fa-trash"></i>
                                            </button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="d-flex justify-content-center">
                    {{ $timeSlots->links() }}
                </div>
            @else
                <div class="text-center py-5">
                    <i class="fas fa-clock fa-3x text-gray-300 mb-3"></i>
                    <h5 class="text-gray-400">Belum ada data time slots</h5>
                    <p class="text-gray-400">Generate time slots dari jadwal untuk memulai</p>
                    <a href="{{ route('admin.schedules.index') }}" class="btn btn-primary">
                        <i class="fas fa-calendar-alt mr-2"></i> Lihat Jadwal
                    </a>
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
