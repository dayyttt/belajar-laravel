<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="service_owner_id">Pemilik Jasa</label>
            <select class="form-control @error('service_owner_id') is-invalid @enderror" 
                    id="service_owner_id" name="service_owner_id" required>
                <option value="">Pilih Pemilik Jasa</option>
                @foreach($serviceOwners as $owner)
                    <option value="{{ $owner->id }}" 
                            {{ old('service_owner_id', $availability->service_owner_id ?? '') == $owner->id ? 'selected' : '' }}>
                        {{ $owner->brand_name }}
                    </option>
                @endforeach
            </select>
            @error('service_owner_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="service_id">Layanan (opsional)</label>
            <select class="form-control @error('service_id') is-invalid @enderror" 
                    id="service_id" name="service_id">
                <option value="">Semua Layanan</option>
                @foreach($services as $service)
                    <option value="{{ $service->id }}" 
                            {{ old('service_id', $availability->service_id ?? '') == $service->id ? 'selected' : '' }}>
                        {{ $service->name }}
                    </option>
                @endforeach
            </select>
            @error('service_id')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="day_of_week">Hari</label>
            <select class="form-control @error('day_of_week') is-invalid @enderror" 
                    id="day_of_week" name="day_of_week" required>
                <option value="">Pilih Hari</option>
                @foreach($daysOfWeek as $key => $day)
                    <option value="{{ $key }}" 
                            {{ old('day_of_week', $availability->day_of_week ?? '') == $key ? 'selected' : '' }}>
                        {{ $day }}
                    </option>
                @endforeach
            </select>
            @error('day_of_week')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="opening_time">Jam Buka</label>
            <input type="time" class="form-control @error('opening_time') is-invalid @enderror" 
                   id="opening_time" name="opening_time" 
                   value="{{ old('opening_time', $availability->opening_time ?? '') }}" required>
            @error('opening_time')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="closing_time">Jam Tutup</label>
            <input type="time" class="form-control @error('closing_time') is-invalid @enderror" 
                   id="closing_time" name="closing_time" 
                   value="{{ old('closing_time', $availability->closing_time ?? '') }}" required>
            @error('closing_time')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-4">
        <div class="form-group">
            <label for="slot_duration_minutes">Durasi Slot (menit)</label>
            <input type="number" min="15" max="240" step="15" 
                   class="form-control @error('slot_duration_minutes') is-invalid @enderror" 
                   id="slot_duration_minutes" name="slot_duration_minutes" 
                   value="{{ old('slot_duration_minutes', $availability->slot_duration_minutes ?? 30) }}" required>
            @error('slot_duration_minutes')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="break_duration_minutes">Durasi Istirahat (menit)</label>
            <input type="number" min="0" 
                   class="form-control @error('break_duration_minutes') is-invalid @enderror" 
                   id="break_duration_minutes" name="break_duration_minutes" 
                   value="{{ old('break_duration_minutes', $availability->break_duration_minutes ?? 0) }}">
            @error('break_duration_minutes')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-4">
        <div class="form-group">
            <label for="break_start_time">Waktu Istirahat</label>
            <input type="time" class="form-control @error('break_start_time') is-invalid @enderror" 
                   id="break_start_time" name="break_start_time" 
                   value="{{ old('break_start_time', $availability->break_start_time ?? '') }}">
            @error('break_start_time')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="is_active" name="is_available" 
           value="1" {{ old('is_available', isset($availability) && $availability->is_available ? 'checked' : 'checked') }}>
    <label class="form-check-label" for="is_active">Tersedia</label>
</div>