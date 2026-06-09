@extends('layouts.admin')
@section('title', 'Manajemen Pelanggan')
@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="h3 mb-1 text-gray-900">Manajemen Pelanggan</h1>
                    <p class="text-muted">Kelola data pelanggan TokiToki</p>
                </div>
                <a href="{{ route('customers.create') }}" class="btn btn-primary">
                    <i class="fas fa-plus mr-2"></i>
                    Tambah Pelanggan
                </a>
            </div>
        </div>
    </div>

    <!-- Search & Filter -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('customers.index') }}" method="GET" class="row g-3">
                        <div class="col-md-10">
                            <div class="input-group">
                                <span class="input-group-text bg-white">
                                    <i class="fas fa-search text-muted"></i>
                                </span>
                                <input type="search" name="search" class="form-control" 
                                       placeholder="Cari berdasarkan nama, email, atau telepon..." 
                                       value="{{ request('search') }}">
                            </div>
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary w-100">
                                <i class="fas fa-search mr-1"></i> Cari
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Customers Table -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h5 class="card-title mb-0">Daftar Pelanggan</h5>
                </div>
                <div class="card-body p-0">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th class="text-center" width="80">ID</th>
                                    <th>Nama Pelanggan</th>
                                    <th>Kontak</th>
                                    <th>Alamat</th>
                                    <th class="text-center" width="120">Total Booking</th>
                                    <th class="text-center" width="150">Bergabung</th>
                                    <th class="text-center" width="150">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse($customers as $customer)
                                <tr>
                                    <td class="text-center">
                                        <span class="badge bg-secondary">{{ 'CST-' . str_pad($customer->id, 3, '0', STR_PAD_LEFT) }}</span>
                                    </td>
                                    <td>
                                        <div class="d-flex align-items-center">
                                            <div class="avatar-circle bg-primary text-white me-2" style="width: 40px; height: 40px; border-radius: 50%; display: flex; align-items: center; justify-content: center; font-weight: bold;">
                                                {{ strtoupper(substr($customer->name, 0, 1)) }}
                                            </div>
                                            <div>
                                                <div class="fw-bold">{{ $customer->name }}</div>
                                                @if($customer->notes)
                                                <small class="text-muted">{{ Str::limit($customer->notes, 30) }}</small>
                                                @endif
                                            </div>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="small">
                                            @if($customer->email)
                                            <div class="mb-1">
                                                <i class="fas fa-envelope text-muted me-1"></i>
                                                <a href="mailto:{{ $customer->email }}" class="text-decoration-none">{{ $customer->email }}</a>
                                            </div>
                                            @endif
                                            @if($customer->phone)
                                            <div>
                                                <i class="fas fa-phone text-muted me-1"></i>
                                                <a href="tel:{{ $customer->phone }}" class="text-decoration-none">{{ $customer->phone }}</a>
                                            </div>
                                            @endif
                                            @if(!$customer->email && !$customer->phone)
                                            <span class="text-muted">-</span>
                                            @endif
                                        </div>
                                    </td>
                                    <td>
                                        <div class="small text-muted" style="max-width: 200px;">
                                            {{ $customer->address ? Str::limit($customer->address, 50) : '-' }}
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <span class="badge bg-info">
                                            <i class="fas fa-calendar-check me-1"></i>
                                            {{ $customer->bookings_count ?? 0 }}
                                        </span>
                                    </td>
                                    <td class="text-center">
                                        <div class="small">
                                            <div class="text-muted">{{ $customer->created_at->format('d M Y') }}</div>
                                            <div class="text-muted">{{ $customer->created_at->diffForHumans() }}</div>
                                        </div>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group" role="group">
                                            <a href="{{ route('customers.show', $customer->id) }}" 
                                               class="btn btn-sm btn-info" 
                                               title="Lihat Detail">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a href="{{ route('customers.edit', $customer->id) }}" 
                                               class="btn btn-sm btn-warning" 
                                               title="Edit">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                            <form action="{{ route('customers.destroy', $customer->id) }}" 
                                                  method="POST" 
                                                  class="d-inline" 
                                                  onsubmit="return confirm('Apakah Anda yakin ingin menghapus pelanggan ini?')">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" 
                                                        class="btn btn-sm btn-danger" 
                                                        title="Hapus">
                                                    <i class="fas fa-trash"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @empty
                                <tr>
                                    <td colspan="7" class="text-center py-5">
                                        <div class="text-muted">
                                            <i class="fas fa-users fa-3x mb-3 opacity-50"></i>
                                            <p class="mb-0">Tidak ada data pelanggan</p>
                                            @if(request('search'))
                                            <p class="small">Coba kata kunci pencarian yang berbeda</p>
                                            @endif
                                        </div>
                                    </td>
                                </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                
                @if($customers->hasPages())
                <div class="card-footer">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="text-muted small">
                            Menampilkan {{ $customers->firstItem() }} - {{ $customers->lastItem() }} dari {{ $customers->total() }} pelanggan
                        </div>
                        <div>
                            {{ $customers->withQueryString()->links() }}
                        </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
@endsection