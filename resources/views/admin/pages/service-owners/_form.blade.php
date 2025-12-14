<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="brand_name">Nama Brand/Perusahaan</label>
            <input type="text" class="form-control @error('brand_name') is-invalid @enderror" 
                   id="brand_name" name="brand_name" 
                   value="{{ old('brand_name', $serviceOwner->brand_name ?? '') }}" required>
            @error('brand_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="pic_name">Nama PIC</label>
            <input type="text" class="form-control @error('pic_name') is-invalid @enderror" 
                   id="pic_name" name="pic_name" 
                   value="{{ old('pic_name', $serviceOwner->pic_name ?? '') }}" required>
            @error('pic_name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                   id="email" name="email" 
                   value="{{ old('email', $serviceOwner->email ?? '') }}" required>
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="phone">No. Telepon/HP</label>
            <input type="text" class="form-control @error('phone') is-invalid @enderror" 
                   id="phone" name="phone" 
                   value="{{ old('phone', $serviceOwner->phone ?? '') }}" required>
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group">
    <label for="address">Alamat</label>
    <textarea class="form-control @error('address') is-invalid @enderror" 
              id="address" name="address" rows="3" required>{{ old('address', $serviceOwner->address ?? '') }}</textarea>
    @error('address')
        <span class="invalid-feedback" role="alert">
            <strong>{{ $message }}</strong>
        </span>
    @enderror
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="service_area">Area Layanan (opsional)</label>
            <input type="text" class="form-control @error('service_area') is-invalid @enderror" 
                   id="service_area" name="service_area" 
                   value="{{ old('service_area', $serviceOwner->service_area ?? '') }}">
            @error('service_area')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="commission_rate">Komisi (%)</label>
            <input type="number" step="0.01" min="0" max="100" 
                   class="form-control @error('commission_rate') is-invalid @enderror" 
                   id="commission_rate" name="commission_rate" 
                   value="{{ old('commission_rate', $serviceOwner->commission_rate ?? 0) }}" required>
            @error('commission_rate')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
    <div class="col-md-3">
        <div class="form-group">
            <label for="join_date">Tanggal Bergabung</label>
            <input type="date" class="form-control @error('join_date') is-invalid @enderror" 
                   id="join_date" name="join_date" 
                   value="{{ old('join_date', isset($serviceOwner) ? $serviceOwner->join_date->format('Y-m-d') : now()->format('Y-m-d')) }}" 
                   required>
            @error('join_date')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
    </div>
</div>

<div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="is_active" name="is_active" 
           value="1" {{ old('is_active', isset($serviceOwner) && $serviceOwner->is_active ? 'checked' : '') }}>
    <label class="form-check-label" for="is_active">Aktif</label>
</div>