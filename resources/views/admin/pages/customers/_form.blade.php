@csrf

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="name" class="form-label required">Nama Lengkap</label>
            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                   id="name" name="name" value="{{ old('name', $customer->name ?? '') }}" 
                   required placeholder="Masukkan nama lengkap">
            @error('name')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" 
                   id="email" name="email" value="{{ old('email', $customer->email ?? '') }}"
                   placeholder="contoh@email.com">
            @error('email')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-6">
        <div class="form-group">
            <label for="phone" class="form-label">Nomor Telepon</label>
            <div class="input-group">
                <span class="input-group-text">
                    <i class="fas fa-phone"></i>
                </span>
                <input type="text" class="form-control @error('phone') is-invalid @enderror" 
                       id="phone" name="phone" value="{{ old('phone', $customer->phone ?? '') }}"
                       placeholder="08xxxxxxxxxx">
            </div>
            @error('phone')
                <div class="invalid-feedback">{{ $message }}</div>
            @enderror
        </div>
    </div>
    <div class="col-md-6">
        <div class="form-group">
            <label for="created_at" class="form-label">Tanggal Bergabung</label>
            <input type="text" class="form-control" 
                   value="{{ isset($customer) ? $customer->created_at->format('d M Y') : 'Baru' }}" 
                   readonly>
        </div>
    </div>
</div>

<div class="form-group">
    <label for="address" class="form-label">Alamat Lengkap</label>
    <div class="input-group">
        <span class="input-group-text">
            <i class="fas fa-map-marker-alt"></i>
        </span>
        <textarea class="form-control @error('address') is-invalid @enderror" 
                  id="address" name="address" rows="3" 
                  placeholder="Masukkan alamat lengkap">{{ old('address', $customer->address ?? '') }}</textarea>
    </div>
    @error('address')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="notes" class="form-label">Catatan Khusus</label>
    <textarea class="form-control @error('notes') is-invalid @enderror" 
              id="notes" name="notes" rows="3"
              placeholder="Catatan atau preferensi khusus pelanggan">{{ old('notes', $customer->notes ?? '') }}</textarea>
    @error('notes')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<!-- Action Buttons -->
<div class="form-actions">
    <div class="d-flex justify-content-between align-items-center">
        <div>
            @if(isset($customer))
                <small class="text-muted">
                    <i class="fas fa-clock me-1"></i>
                    Terakhir diupdate: {{ $customer->updated_at->diffForHumans() }}
                </small>
            @endif
        </div>
        <div class="btn-group">
            <a href="{{ route('customers.index') }}" class="btn btn-light">
                <i class="fas fa-times me-2"></i>Batal
            </a>
            <button type="submit" class="btn btn-primary">
                <i class="fas fa-save me-2"></i>
                {{ isset($customer) ? 'Update Data' : 'Simpan Data' }}
            </button>
        </div>
    </div>
</div>

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Phone number formatting
    const phoneInput = document.getElementById('phone');
    if (phoneInput) {
        phoneInput.addEventListener('input', function(e) {
            let value = e.target.value.replace(/\D/g, '');
            if (value.startsWith('0')) {
                value = value;
            } else if (value.startsWith('62')) {
                value = '0' + value.substring(2);
            }
            e.target.value = value;
        });
    }

    // Form validation
    const form = document.getElementById('customerForm');
    if (form) {
        form.addEventListener('submit', function(e) {
            const nameInput = document.getElementById('name');
            if (!nameInput.value.trim()) {
                e.preventDefault();
                nameInput.focus();
                alert('Nama lengkap wajib diisi!');
            }
        });
    }
});
</script>
@endpush