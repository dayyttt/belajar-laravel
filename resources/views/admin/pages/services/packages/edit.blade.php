@extends('admin.layouts.main')

@section('title', 'Edit Packages')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Paket Layanan</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{ route('admin.pages.services.packages.index') }}">Daftar Paket Layanan</a></li>
                        <li class="breadcrumb-item active">Edit</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card card-primary">
                        <form id="packageForm" action="{{ route('admin.pages.services.packages.update', $servicePackage->id) }}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="name">Nama Paket <span class="text-danger">*</span></label>
                                            <input type="text" class="form-control @error('name') is-invalid @enderror" 
                                                   id="name" name="name" value="{{ old('name', $servicePackage->name) }}" required>
                                            @error('name')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="owner_id">Pemilik Paket <span class="text-danger">*</span></label>
                                            <select class="form-control @error('owner_id') is-invalid @enderror" 
                                                    id="owner_id" name="owner_id" required>
                                                <option value="">Pilih Pemilik</option>
                                                @foreach($owners as $owner)
                                                    <option value="{{ $owner->id }}" 
                                                        {{ old('owner_id', $servicePackage->owner_id) == $owner->id ? 'selected' : '' }}>
                                                        {{ $owner->name }}
                                                    </option>
                                                @endforeach
                                            </select>
                                            @error('owner_id')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="description">Deskripsi</label>
                                    <textarea class="form-control @error('description') is-invalid @enderror" 
                                              id="description" name="description" rows="3">{{ old('description', $servicePackage->description) }}</textarea>
                                    @error('description')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>

                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="valid_until">Berlaku Sampai</label>
                                            <input type="date" class="form-control @error('valid_until') is-invalid @enderror" 
                                                   id="valid_until" name="valid_until" 
                                                   min="{{ \Carbon\Carbon::tomorrow()->format('Y-m-d') }}"
                                                   value="{{ old('valid_until', $servicePackage->valid_until ? $servicePackage->valid_until->format('Y-m-d') : '') }}">
                                            <small class="form-text text-muted">
                                                Kosongkan jika tidak ada batas waktu
                                            </small>
                                            @error('valid_until')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="discount_amount">Total Diskon (Rp)</label>
                                            <input type="number" class="form-control @error('discount_amount') is-invalid @enderror" 
                                                   id="discount_amount" name="discount_amount" 
                                                   value="{{ old('discount_amount', $servicePackage->discount_amount) }}" min="0">
                                            @error('discount_amount')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" id="is_active" 
                                               name="is_active" value="1" {{ old('is_active', $servicePackage->is_active) ? 'checked' : '' }}>
                                        <label class="custom-control-label" for="is_active">Aktif</label>
                                    </div>
                                </div>

                                <hr>

                                <h5>Daftar Layanan</h5>
                                
                                <div class="table-responsive mb-3">
                                    <table class="table table-bordered" id="servicesTable">
                                        <thead>
                                            <tr>
                                                <th>Layanan</th>
                                                <th>Harga Satuan</th>
                                                <th>Kuantitas</th>
                                                <th>Diskon (Rp)</th>
                                                <th>Subtotal</th>
                                                <th>Aksi</th>
                                            </tr>
                                        </thead>
                                        <tbody id="servicesTableBody">
                                            <!-- Rows will be added dynamically -->
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <td colspan="4" class="text-right"><strong>Total Harga:</strong></td>
                                                <td colspan="2" id="totalPrice">{{ \App\Helpers\MoneyHelper::formatRupiah($servicePackage->total_price) }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-right"><strong>Total Diskon:</strong></td>
                                                <td colspan="2" id="totalDiscount">- {{ \App\Helpers\MoneyHelper::formatRupiah($servicePackage->discount_amount) }}</td>
                                            </tr>
                                            <tr>
                                                <td colspan="4" class="text-right"><strong>Harga Akhir:</strong></td>
                                                <td colspan="2" id="finalPrice">{{ \App\Helpers\MoneyHelper::formatRupiah($servicePackage->final_price) }}</td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>

                                <input type="hidden" name="total_price" id="totalPriceInput" value="{{ $servicePackage->total_price }}">
                                <input type="hidden" name="final_price" id="finalPriceInput" value="{{ $servicePackage->final_price }}">
                                <input type="hidden" name="services" id="servicesInput" 
                                       value='@json($servicePackage->services->map(function($service) {
                                           return [
                                               'id' => $service->id,
                                               'name' => $service->name,
                                               'price' => $service->base_price,
                                               'quantity' => $service->pivot->quantity,
                                               'discount' => $service->pivot->discount_amount,
                                               'subtotal' => ($service->base_price * $service->pivot->quantity) - $service->pivot->discount_amount
                                           ];
                                       }))'>

                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="service_id">Tambah Layanan</label>
                                            <select class="form-control" id="service_id">
                                                <option value="">Pilih Layanan</option>
                                                @foreach($services as $service)
                                                    @if(!$servicePackage->services->contains($service->id))
                                                    <option value="{{ $service->id }}" 
                                                            data-price="{{ $service->base_price }}"
                                                            data-name="{{ $service->name }}">
                                                        {{ $service->name }} ({{ \App\Helpers\MoneyHelper::formatRupiah($service->base_price) }})
                                                    </option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <div class="form-group">
                                            <label for="service_quantity">Kuantitas</label>
                                            <input type="number" class="form-control" id="service_quantity" value="1" min="1">
                                        </div>
                                    </div>
                                    <div class="col-md-2 d-flex align-items-end">
                                        <button type="button" class="btn btn-primary w-100" id="addServiceBtn">
                                            <i class="fas fa-plus"></i> Tambah
                                        </button>
                                    </div>
                                </div>
                            </div>

                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Perbarui</button>
                                <a href="{{ route('admin.pages.services.packages.index') }}" class="btn btn-default">Batal</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection