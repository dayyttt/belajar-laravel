@extends('admin.layouts.main')

@section('title', 'Edit Jadwal')

@section('content')
<div class="container-fluid">
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">
            <i class="fas fa-calendar-edit mr-2"></i>Edit Jadwal
        </h1>
        <a href="{{ route('admin.pages.ketersediaan.schedules.index') }}" class="btn btn-secondary btn-sm">
            <i class="fas fa-arrow-left mr-1"></i> Kembali
        </a>
    </div>

    <!-- Form Card -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Edit Informasi Jadwal</h6>
        </div>
        <div class="card-body">
            <form action="{{ route('admin.pages.ketersediaan.schedules.update', $schedule->id) }}" method="POST">
                @csrf
                @method('PUT')
                @include('admin.pages.ketersediaan.schedules._form')
                <div class="row mt-4">
                    <div class="col-12">
                        <button type="submit" class="btn btn-primary">
                            <i class="fas fa-save mr-2"></i> Update Jadwal
                        </button>
                        <a href="{{ route('admin.pages.ketersediaan.schedules.index') }}" class="btn btn-secondary">
                            <i class="fas fa-times mr-2"></i> Batal
                        </a>
                    </div>
                </div>
            </form>
        </div>
    </div>

    <!-- Time Slots Info -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-info">Time Slots ({{ $schedule->timeSlots->count() }})</h6>
        </div>
        <div class="card-body">
            @if($schedule->timeSlots->count() > 0)
                <div class="table-responsive">
                    <table class="table table-sm">
                        <thead>
                            <tr>
                                <th>Waktu Mulai</th>
                                <th>Waktu Selesai</th>
                                <th>Status</th>
                                <th>Dibooking Oleh</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($schedule->timeSlots->take(10) as $slot)
                            <tr>
                                <td>{{ $slot->start_datetime->format('H:i') }}</td>
                                <td>{{ $slot->end_datetime->format('H:i') }}</td>
                                <td>
                                    <span class="badge badge-{{ $slot->status == 'available' ? 'success' : ($slot->status == 'booked' ? 'warning' : 'danger') }}">
                                        {{ $slot->status }}
                                    </span>
                                </td>
                                <td>{{ $slot->bookedBy ? $slot->bookedBy->name : '-' }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @if($schedule->timeSlots->count() > 10)
                    <p class="text-muted text-center">... dan {{ $schedule->timeSlots->count() - 10 }} slot lainnya</p>
                @endif
            @else
                <div class="text-center py-3">
                    <p class="text-muted">Belum ada time slots yang di-generate</p>
                    <button type="button" class="btn btn-info btn-sm" onclick="generateSlots({{ $schedule->id }})">
                        <i class="fas fa-clock mr-1"></i> Generate Time Slots
                    </button>
                </div>
            @endif
        </div>
    </div>
</div>

<!-- Generate Slots Modal -->
<div class="modal fade" id="generateSlotsModal" tabindex="-1">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Generate Time Slots</h5>
                <button type="button" class="close" data-dismiss="modal">
                    <span>&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Apakah Anda yakin ingin generate time slots untuk jadwal ini?</p>
                <p class="text-muted">Slot yang ada akan dihapus dan diganti dengan yang baru.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Batal</button>
                <form id="generateSlotsForm" method="POST" style="display: inline;">
                    @csrf
                    <button type="submit" class="btn btn-primary">Generate</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
