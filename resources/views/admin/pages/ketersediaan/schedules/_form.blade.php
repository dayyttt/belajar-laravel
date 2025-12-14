<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="service_owner_id" class="form-label">
                <i class="fas fa-user-tie mr-1"></i>Pemilik Jasa <span class="text-danger">*</span>
            </label>
            <select class="form-control @error('service_owner_id') is-invalid @enderror" 
                    id="service_owner_id" name="service_owner_id" required>
                <option value="">Pilih Pemilik Jasa</option>
                @foreach($serviceOwners as $owner)
                    <option value="{{ $owner->id }}" 
                            {{ old('service_owner_id', isset($schedule) ? $schedule->service_owner_id : '') == $owner->id ? 'selected' : '' }}>
                        {{ $owner->brand_name }}
                    </option>
                @endforeach
            </select>
            @error('service_owner_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="service_id" class="form-label">
                <i class="fas fa-concierge-bell mr-1"></i>Layanan <span class="text-danger">*</span>
            </label>
            <select class="form-control @error('service_id') is-invalid @enderror" 
                    id="service_id" name="service_id" required>
                <option value="">Pilih Layanan</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" 
                            {{ old('service_id', isset($schedule) ? $schedule->service_id : '') == $service->id ? 'selected' : '' }}>
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
            @error('service_id')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-8">
        <div class="form-group">
            <label for="title" class="form-label">
                <i class="fas fa-heading mr-1"></i>Judul Jadwal <span class="text-danger">*</span>
            </label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" 
                   id="title" name="title" 
                   value="{{ old('title', isset($schedule) ? $schedule->title : '') }}" 
                   placeholder="Contoh: Konsultasi Design Grafis" required>
            @error('title')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="status" class="form-label">
                <i class="fas fa-toggle-on mr-1"></i>Status <span class="text-danger">*</span>
            </label>
            <select class="form-control @error('status') is-invalid @enderror" 
                    id="status" name="status" required>
                <option value="active" {{ old('status', isset($schedule) ? $schedule->status : 'active')) == 'active' ? 'selected' : '' }}>
                    Aktif
                </option>
                <option value="inactive" {{ old('status', isset($schedule) ? $schedule->status : 'active')) == 'inactive' ? 'selected' : '' }}>
                    Nonaktif
                </option>
                <option value="cancelled" {{ old('status', isset($schedule) ? $schedule->status : 'active')) == 'cancelled' ? 'selected' : '' }}>
                    Dibatalkan
                </option>
            </select>
            @error('status')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <label for="description" class="form-label">
        <i class="fas fa-align-left mr-1"></i>Deskripsi
    </label>
    <textarea class="form-control @error('description') is-invalid @enderror" 
              id="description" name="description" rows="3"
              placeholder="Deskripsi jadwal (opsional)">{{ old('description', isset($schedule) ? $schedule->description : '') }}</textarea>
    @error('description')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="row">
    <div class="col-md-3">
        <div class="form-group">
            <label for="date" class="form-label">
                <i class="fas fa-calendar-day mr-1"></i>Tanggal <span class="text-danger">*</span>
            </label>
            <input type="date" class="form-control @error('date') is-invalid @enderror" 
                   id="date" name="date" 
                   value="{{ old('date', isset($schedule) ? $schedule->date->format('Y-m-d') : now()->format('Y-m-d')) }}" 
                   required>
            @error('date')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="start_time" class="form-label">
                <i class="fas fa-clock mr-1"></i>Jam Mulai <span class="text-danger">*</span>
            </label>
            <input type="time" class="form-control @error('start_time') is-invalid @enderror" 
                   id="start_time" name="start_time" 
                   value="{{ old('start_time', isset($schedule) ? $schedule->start_time : '09:00') }}" 
                   required>
            @error('start_time')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="end_time" class="form-label">
                <i class="fas fa-clock mr-1"></i>Jam Selesai <span class="text-danger">*</span>
            </label>
            <input type="time" class="form-control @error('end_time') is-invalid @enderror" 
                   id="end_time" name="end_time" 
                   value="{{ old('end_time', isset($schedule) ? $schedule->end_time : '17:00') }}" 
                   required>
            @error('end_time')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="duration_minutes" class="form-label">
                <i class="fas fa-hourglass-half mr-1"></i>Durasi (menit) <span class="text-danger">*</span>
            </label>
            <input type="number" class="form-control @error('duration_minutes') is-invalid @enderror" 
                   id="duration_minutes" name="duration_minutes" 
                   value="{{ old('duration_minutes', isset($schedule) ? $schedule->duration_minutes : 60) }}" 
                   min="15" max="480" step="15" required>
            @error('duration_minutes')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="max_bookings" class="form-label">
                <i class="fas fa-users mr-1"></i>Maksimal Booking per Slot
            </label>
            <input type="number" class="form-control @error('max_bookings') is-invalid @enderror" 
                   id="max_bookings" name="max_bookings" 
                   value="{{ old('max_bookings', isset($schedule) ? $schedule->max_bookings : 1) }}" 
                   min="1" max="10">
            @error('max_bookings')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group mt-4 pt-2">
            <div class="custom-control custom-switch">
                <input type="checkbox" class="custom-control-input" id="is_recurring" name="is_recurring" 
                       value="1" {{ old('is_recurring', isset($schedule) && $schedule->is_recurring ? 'checked' : '') }}>
                <label class="custom-control-label" for="is_recurring">
                    <i class="fas fa-redo mr-1"></i>Jadwal Berulang
                </label>
            </div>
        </div>
    </div>
</div>

<!-- Recurring Pattern (shown when is_recurring is checked) -->
<div id="recurringPattern" style="display: none;">
    <div class="card border-info mt-3">
        <div class="card-header bg-light">
            <h6 class="mb-0">
                <i class="fas fa-cog mr-1"></i>Pola Berulang
            </h6>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="recurring_type" class="form-label">Tipe Berulang</label>
                        <select class="form-control" name="recurring_pattern[type]" id="recurring_type">
                            <option value="">Pilih Tipe</option>
                            <option value="daily">Harian</option>
                            <option value="weekly">Mingguan</option>
                            <option value="monthly">Bulanan</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="recurring_interval" class="form-label">Interval</label>
                        <input type="number" class="form-control" name="recurring_pattern[interval]" 
                               id="recurring_interval" min="1" max="30" value="1">
                        <small class="form-text text-muted">Contoh: 2 untuk setiap 2 hari/minggu/bulan</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="recurring_end_date" class="form-label">Tanggal Berakhir</label>
                        <input type="date" class="form-control" name="recurring_pattern[end_date]" 
                               id="recurring_end_date">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
