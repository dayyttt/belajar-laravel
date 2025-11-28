@extends('admin.layouts.main')

@section('title', 'Pengaturan Situs')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Pengaturan Situs</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('admin.content.settings.update') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        
                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h5>Informasi Dasar</h5>
                                <div class="mb-3">
                                    <label for="site_name" class="form-label">Nama Situs</label>
                                    <input type="text" class="form-control" id="site_name" name="site_name" 
                                           value="{{ $settings->site_name ?? '' }}" required>
                                </div>
                                <div class="mb-3">
                                    <label for="logo" class="form-label">Logo</label>
                                    <input type="file" class="form-control" id="logo" name="logo">
                                    @if(isset($settings->logo) && $settings->logo)
                                        <img src="{{ Storage::url($settings->logo) }}" alt="Logo" class="mt-2" style="max-height: 50px;">
                                    @endif
                                </div>
                                <div class="mb-3">
                                    <label for="favicon" class="form-label">Favicon</label>
                                    <input type="file" class="form-control" id="favicon" name="favicon">
                                    @if(isset($settings->favicon) && $settings->favicon)
                                        <img src="{{ Storage::url($settings->favicon) }}" alt="Favicon" class="mt-2" style="max-height: 32px;">
                                    @endif
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <h5>Warna Tema</h5>
                                <div class="row">
                                    <div class="col-md-6 mb-3">
                                        <label for="primary_color" class="form-label">Warna Primer</label>
                                        <input type="color" class="form-control form-control-color" id="primary_color" 
                                               name="primary_color" value="{{ $settings->primary_color ?? '#3490dc' }}">
                                    </div>
                                    <div class="col-md-6 mb-3">
                                        <label for="secondary_color" class="form-label">Warna Sekunder</label>
                                        <input type="color" class="form-control form-control-color" id="secondary_color" 
                                               name="secondary_color" value="{{ $settings->secondary_color ?? '#6c757d' }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-4">
                            <div class="col-md-6">
                                <h5>Kontak</h5>
                                <div class="mb-3">
                                    <label for="phone" class="form-label">Telepon</label>
                                    <input type="text" class="form-control" id="phone" name="phone" 
                                           value="{{ $settings->phone ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="whatsapp" class="form-label">WhatsApp</label>
                                    <input type="text" class="form-control" id="whatsapp" name="whatsapp" 
                                           value="{{ $settings->whatsapp ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" 
                                           value="{{ $settings->email ?? '' }}">
                                </div>
                                <div class="mb-3">
                                    <label for="address" class="form-label">Alamat</label>
                                    <textarea class="form-control" id="address" name="address" rows="3">{{ $settings->address ?? '' }}</textarea>
                                </div>
                            </div>
                            
                            <div class="col-md-6">
                                <h5>Media Sosial</h5>
                                <div class="mb-3">
                                    <label for="facebook" class="form-label">Facebook</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fab fa-facebook"></i></span>
                                        <input type="url" class="form-control" id="facebook" name="facebook" 
                                               value="{{ $settings->facebook ?? '' }}">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="twitter" class="form-label">Twitter</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fab fa-twitter"></i></span>
                                        <input type="url" class="form-control" id="twitter" name="twitter" 
                                               value="{{ $settings->twitter ?? '' }}">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="instagram" class="form-label">Instagram</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fab fa-instagram"></i></span>
                                        <input type="url" class="form-control" id="instagram" name="instagram" 
                                               value="{{ $settings->instagram ?? '' }}">
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <label for="youtube" class="form-label">YouTube</label>
                                    <div class="input-group">
                                        <span class="input-group-text"><i class="fab fa-youtube"></i></span>
                                        <input type="url" class="form-control" id="youtube" name="youtube" 
                                               value="{{ $settings->youtube ?? '' }}">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="text-end">
                            <button type="submit" class="btn btn-primary">Simpan Perubahan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .form-control-color {
        height: calc(1.5em + 1rem + 2px);
        padding: 0.5rem;
    }
</style>
@endpush