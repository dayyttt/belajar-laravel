@extends('admin.layouts.main')

@section('title', 'Kalender Ketersediaan')

@section('content')
<div class="container-fluid">
    <div class="row mb-4">
        <div class="col-md-6">
            <h4>Kalender Ketersediaan</h4>
        </div>
        <div class="col-md-6 text-right">
            <a href="{{ route('admin.pages.ketersediaan.availability.index') }}" class="btn btn-secondary">
                <i class="fas fa-arrow-left"></i> Kembali
            </a>
        </div>
    </div>

    <div class="card shadow mb-4">
        <div class="card-body">
            <form action="{{ route('admin.pages.ketersediaan.availability.calendar') }}" method="GET" class="mb-4">
                <div class="row">
                    <div class="col-md-3">
                        <input type="date" class="form-control" name="date" value="{{ $date }}">
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="service_owner_id">
                            <option value="">Semua Pemilik Jasa</option>
                            @foreach($serviceOwners as $owner)
                                <option value="{{ $owner->id }}" 
                                        {{ request('service_owner_id') == $owner->id ? 'selected' : '' }}>
                                    {{ $owner->brand_name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select class="form-control" name="service_id">
                            <option value="">Semua Layanan</option>
                            @foreach($services as $service)
                                <option value="{{ $service->id }}" 
                                        {{ request('service_id') == $service->id ? 'selected' : '' }}>
                                    {{ $service->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-3">
                        <button type="submit" class="btn btn-primary">Filter</button>
                    </div>
                </div>
            </form>

            <div class="row">
                @foreach($timeSlots as $slot)
                    <div class="col-md-4 mb-3">
                        <div class="card {{ $slot->status == 'available' ? 'border-success' : ($slot->status == 'booked' ? 'border-warning' : 'border-danger') }}">
                            <div class="card-body">
                                <h6 class="card-title">
                                    {{ $slot->schedule->service->name }}
                                </h6>
                                <p class="card-text">
                                    <small class="text-muted">{{ $slot->schedule->serviceOwner->brand_name }}</small><br>
                                    <strong>{{ $slot->start_datetime->format('H:i') }} - {{ $slot->end_datetime->format('H:i') }}</strong><br>
                                    <span class="badge badge-{{ $slot->status == 'available' ? 'success' : ($slot->status == 'booked' ? 'warning' : 'danger') }}">
                                        {{ $slot->status }}
                                    </span>
                                    @if($slot->booked_by)
                                        <br><small>Dibooking oleh: {{ $slot->bookedBy->name }}</small>
                                    @endif
                                </p>
                                <div class="btn-group btn-group-sm">
                                    <a href="{{ route('admin.pages.ketersediaan.time-slots.edit', $slot->id) }}" class="btn btn-outline-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    @if($slot->status == 'booked')
                                        <form action="{{ route('admin.pages.ketersediaa.time-slots.confirm', $slot->id) }}" method="POST" class="d-inline">
                                            @csrf
                                            <button type="submit" class="btn btn-outline-success">
                                                <i class="fas fa-check"></i>
                                            </button>
                                        </form>
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection