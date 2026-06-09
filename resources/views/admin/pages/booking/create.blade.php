@extends('admin.layouts.main')

@section('title', 'Tambah Booking')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah Booking</h3>
                    <div class="card-tools">
                        <a href="{{ route('admin.pages.booking.index') }}" class="btn btn-default btn-sm">
                            <i class="fas fa-arrow-left"></i> Kembali
                        </a>
                    </div>
                </div>
                <div class="card-body">
                    <form method="POST" action="{{ route('admin.pages.booking.store') }}">
                        @csrf
                        
                        <!-- Customer Information -->
                        <div class="row">
                            <div class="col-md-12">
                                <h5>Informasi Pelanggan</h5>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Pilih Pelanggan</label>
                                    <select name="customer_id" class="form-control" id="customerSelect">
                                        <option value="">-- Pilih Pelanggan --</option>
                                        @foreach($customers as $customer)
                                        <option value="{{ $customer->id }}" 
                                                data-name="{{ $customer->name }}"
                                                data-email="{{ $customer->email }}"
                                                data-phone="{{ $customer->phone }}">
                                            {{ $customer->name }}
                                        </option>
                                        @endforeach
                                        <option value="new">+ Pelanggan Baru</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Nama Pelanggan <span class="text-danger">*</span></label>
                                    <input type="text" name="customer_name" class="form-control" required
                                           value="{{ old('customer_name') }}" id="customerName">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Email <span class="text-danger">*</span></label>
                                    <input type="email" name="customer_email" class="form-control" required
                                           value="{{ old('customer_email') }}" id="customerEmail">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Telepon <span class="text-danger">*</span></label>
                                    <input type="text" name="customer_phone" class="form-control" required
                                           value="{{ old('customer_phone') }}" id="customerPhone">
                                </div>
                            </div>
                        </div>

                        <!-- Service Information -->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h5>Informasi Layanan</h5>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Pemilik Jasa</label>
                                    <select name="service_owner_id" class="form-control" id="ownerSelect">
                                        <option value="">-- Pilih Pemilik --</option>
                                        @foreach($serviceOwners as $owner)
                                        <option value="{{ $owner->id }}">{{ $owner->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Layanan</label>
                                    <select name="service_id" class="form-control" id="serviceSelect">
                                        <option value="">-- Pilih Layanan --</option>
                                        @foreach($services as $service)
                                        <option value="{{ $service->id }}" 
                                                data-price="{{ $service->price }}"
                                                data-duration="{{ $service->duration }}"
                                                data-owner="{{ $service->owner_id }}">
                                            {{ $service->name }}
                                        </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Tanggal Booking <span class="text-danger">*</span></label>
                                    <input type="date" name="booking_date" class="form-control" required
                                           value="{{ old('booking_date', now()->format('Y-m-d')) }}" id="bookingDate">
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label>Sumber Booking <span class="text-danger">*</span></label>
                                    <select name="source" class="form-control" required>
                                        <option value="manual" {{ old('source', 'manual') == 'manual' ? 'selected' : '' }}>Manual</option>
                                        <option value="whatsapp" {{ old('source') == 'whatsapp' ? 'selected' : '' }}>WhatsApp</option>
                                        <option value="phone" {{ old('source') == 'phone' ? 'selected' : '' }}>Telepon</option>
                                        <option value="app" {{ old('source') == 'app' ? 'selected' : '' }}>Mobile App</option>
                                        <option value="website" {{ old('source') == 'website' ? 'selected' : '' }}>Website</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Jam Mulai <span class="text-danger">*</span></label>
                                    <input type="time" name="start_time" class="form-control" required
                                           value="{{ old('start_time') }}" id="startTime">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Jam Selesai <span class="text-danger">*</span></label>
                                    <input type="time" name="end_time" class="form-control" required
                                           value="{{ old('end_time') }}" id="endTime">
                                </div>
                            </div>
                            <div class="col-md-2">
                                <div class="form-group">
                                    <label>Total Harga <span class="text-danger">*</span></label>
                                    <input type="number" name="total_amount" class="form-control" required
                                           value="{{ old('total_amount') }}" min="0" step="0.01" id="totalAmount">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Catatan Pelanggan</label>
                                    <textarea name="customer_notes" class="form-control" rows="3"
                                              placeholder="Catatan dari pelanggan">{{ old('customer_notes') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <!-- Internal Notes -->
                        <div class="row mt-4">
                            <div class="col-md-12">
                                <h5>Catatan Internal</h5>
                                <hr>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Catatan Internal</label>
                                    <textarea name="internal_notes" class="form-control" rows="3"
                                              placeholder="Catatan untuk internal">{{ old('internal_notes') }}</textarea>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">
                                <i class="fas fa-save"></i> Simpan Booking
                            </button>
                            <a href="{{ route('admin.pages.booking.index') }}" class="btn btn-secondary">
                                Batal
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection