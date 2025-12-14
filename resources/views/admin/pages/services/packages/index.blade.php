@extends('admin.layouts.main')

@section('title', 'Daftar Paket Layanan')

@section('content')
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Daftar Paket Layanan</h1>
                </div>
                <div class="col-sm-6 text-right">
                    <a href="{{ route('admin.pages.services.packages.create') }}" class="btn btn-primary">
                        <i class="fas fa-plus"></i> Tambah Paket
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
        <div class="container-fluid">
            <div class="card">
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="packages-table">
                        <thead>
                            <tr>
                                <th>Nama Paket</th>
                                <th>Jumlah Layanan</th>
                                <th>Total Harga</th>
                                <th>Diskon</th>
                                <th>Harga Akhir</th>
                                <th>Berlaku Sampai</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($packages as $package)
                            <tr>
                                <td>{{ $package->name }}</td>
                                <td>{{ $package->services_count }}</td>
                                <td>@money($package->total_price)</td>
                                <td>@money($package->discount_amount)</td>
                                <td>@money($package->final_price)</td>
                                <td>{{ $package->valid_until ? $package->valid_until->format('d/m/Y') : 'Tidak ada batas' }}</td>
                                <td>
                                    @if($package->valid_until && $package->valid_until->isPast())
                                        <span class="badge badge-secondary">Kadaluarsa</span>
                                    @else
                                        <span class="badge badge-{{ $package->is_active ? 'success' : 'danger' }}">
                                            {{ $package->is_active ? 'Aktif' : 'Nonaktif' }}
                                        </span>
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ route('admin.pages.services.packages.edit', $package->id) }}" 
                                       class="btn btn-sm btn-primary">
                                        <i class="fas fa-edit"></i>
                                    </a>
                                    <button type="button" class="btn btn-sm btn-info" 
                                            data-toggle="modal" data-target="#packageDetail{{ $package->id }}">
                                        <i class="fas fa-eye"></i>
                                    </button>
                                    <form action="{{ route('admin.pages.services.packages.destroy', $package->id) }}" 
                                          method="POST" style="display: inline-block;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger" 
                                                onclick="return confirm('Apakah Anda yakin ingin menghapus paket ini?')">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>

                            <!-- Modal Detail Paket -->
                            <div class="modal fade" id="packageDetail{{ $package->id }}" tabindex="-1" role="dialog" 
                                 aria-labelledby="packageDetailLabel{{ $package->id }}" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="packageDetailLabel{{ $package->id }}">Detail Paket: {{ $package->name }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row mb-4">
                                                <div class="col-md-12">
                                                    <h6>Deskripsi:</h6>
                                                    <p>{{ $package->description ?: 'Tidak ada deskripsi' }}</p>
                                                </div>
                                            </div>
                                            
                                            <h6>Daftar Layanan:</h6>
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Nama Layanan</th>
                                                            <th>Kuantitas</th>
                                                            <th>Harga Satuan</th>
                                                            <th>Diskon</th>
                                                            <th>Subtotal</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @foreach($package->services as $service)
                                                        <tr>
                                                            <td>{{ $service->name }}</td>
                                                            <td>{{ $service->pivot->quantity }}x</td>
                                                            <td>@money($service->base_price)</td>
                                                            <td>@money($service->pivot->discount_amount)</td>
                                                            <td>@money(($service->base_price * $service->pivot->quantity) - $service->pivot->discount_amount)</td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                    <tfoot>
                                                        <tr>
                                                            <th colspan="4" class="text-right">Total Harga:</th>
                                                            <th>@money($package->total_price)</th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="4" class="text-right">Total Diskon:</th>
                                                            <th>-@money($package->discount_amount)</th>
                                                        </tr>
                                                        <tr>
                                                            <th colspan="4" class="text-right">Harga Akhir:</th>
                                                            <th>@money($package->final_price)</th>
                                                        </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
</div>
@endsection

