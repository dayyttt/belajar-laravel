@extends('admin.layouts.main')

@section('title', 'Booking Management')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Booking Management</h1>
            <p class="text-gray-600 mt-1">Kelola semua booking layanan</p>
        </div>
        <a href="{{ route('admin.pages.booking.create') }}" class="bg-[#10b981] hover:bg-[#059669] text-white px-4 py-2 rounded-lg inline-flex items-center">
            <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path>
            </svg>
            Buat Booking Baru
        </a>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-lg shadow p-4">
        <form method="GET" class="flex flex-col md:flex-row gap-4">
            <div class="flex-1 relative">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input type="search" name="search" placeholder="Cari booking berdasarkan ID, customer, atau layanan..." 
                       value="{{ request('search') }}" class="pl-10 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="flex gap-2">
                <select name="status" class="px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Semua Status</option>
                    <option value="draft" {{ request('status') == 'draft' ? 'selected' : '' }}>Draft</option>
                    <option value="waiting_confirmation" {{ request('status') == 'waiting_confirmation' ? 'selected' : '' }}>Menunggu Konfirmasi</option>
                    <option value="confirmed" {{ request('status') == 'confirmed' ? 'selected' : '' }}>Dikonfirmasi</option>
                    <option value="in_progress" {{ request('status') == 'in_progress' ? 'selected' : '' }}>Proses</option>
                    <option value="completed" {{ request('status') == 'completed' ? 'selected' : '' }}>Selesai</option>
                    <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Batal</option>
                </select>
                <select name="payment_status" class="px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="">Semua Payment</option>
                    <option value="unpaid" {{ request('payment_status') == 'unpaid' ? 'selected' : '' }}>Belum Bayar</option>
                    <option value="paid" {{ request('payment_status') == 'paid' ? 'selected' : '' }}>Lunas</option>
                    <option value="refunded" {{ request('payment_status') == 'refunded' ? 'selected' : '' }}>Dikembalikan</option>
                </select>
            </div>
        </form>
    </div>

    <!-- Stats -->
    <div class="grid grid-cols-1 md:grid-cols-5 gap-4">
        <div class="bg-white rounded-lg shadow p-4 bg-yellow-50 border-yellow-200">
            <div class="text-sm text-yellow-800">Menunggu</div>
            <div class="text-2xl font-bold text-yellow-900 mt-1">
                {{ $bookings->where('status', 'waiting_confirmation')->count() }}
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4 bg-blue-50 border-blue-200">
            <div class="text-sm text-blue-800">Dikonfirmasi</div>
            <div class="text-2xl font-bold text-blue-900 mt-1">
                {{ $bookings->where('status', 'confirmed')->count() }}
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4 bg-purple-50 border-purple-200">
            <div class="text-sm text-purple-800">Proses</div>
            <div class="text-2xl font-bold text-purple-900 mt-1">
                {{ $bookings->where('status', 'in_progress')->count() }}
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4 bg-green-50 border-green-200">
            <div class="text-sm text-green-800">Selesai</div>
            <div class="text-2xl font-bold text-green-900 mt-1">
                {{ $bookings->where('status', 'completed')->count() }}
            </div>
        </div>
        <div class="bg-white rounded-lg shadow p-4 bg-red-50 border-red-200">
            <div class="text-sm text-red-800">Batal</div>
            <div class="text-2xl font-bold text-red-900 mt-1">
                {{ $bookings->where('status', 'cancelled')->count() }}
            </div>
        </div>
    </div>

    <!-- Bookings Table -->
    <div class="bg-white rounded-lg shadow">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Booking ID</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Customer</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Layanan</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Kategori</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Provider</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Jadwal</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Durasi</th>
                        <th class="text-right py-3 px-4 text-sm font-semibold text-gray-700">Amount</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Status</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Payment</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($bookings as $booking)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4 text-sm text-gray-900 font-medium">{{ $booking->booking_number ?? 'BK-' . str_pad($booking->id, 3, '0', STR_PAD_LEFT) }}</td>
                        <td class="py-3 px-4 text-sm text-gray-900">
                            <div>{{ $booking->customer_name }}</div>
                            <div class="text-xs text-gray-500">{{ $booking->customer_phone }}</div>
                        </td>
                        <td class="py-3 px-4 text-sm text-gray-700">{{ $booking->service->name ?? '-' }}</td>
                        <td class="py-3 px-4 text-sm">
                            <span class="px-2 py-1 bg-blue-100 text-blue-800 rounded-full text-xs">
                                {{ $booking->service->category->name ?? 'General' }}
                            </span>
                        </td>
                        <td class="py-3 px-4 text-sm text-gray-700">{{ $booking->serviceOwner->name ?? '-' }}</td>
                        <td class="py-3 px-4 text-sm text-gray-700">
                            <div class="flex items-center gap-1">
                                <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                </svg>
                                {{ $booking->booking_date->format('Y-m-d') }} {{ $booking->start_time }}
                            </div>
                        </td>
                        <td class="py-3 px-4 text-sm text-gray-700">{{ $booking->duration ?? '-' }}</td>
                        <td class="py-3 px-4 text-sm text-gray-900 text-right font-semibold">{{ $booking->formatted_amount }}</td>
                        <td class="py-3 px-4 text-sm">
                            @php
                                $statusConfig = [
                                    'draft' => ['label' => 'Draft', 'class' => 'bg-gray-100 text-gray-800'],
                                    'waiting_confirmation' => ['label' => 'Menunggu', 'class' => 'bg-yellow-100 text-yellow-800'],
                                    'confirmed' => ['label' => 'Dikonfirmasi', 'class' => 'bg-blue-100 text-blue-800'],
                                    'in_progress' => ['label' => 'Proses', 'class' => 'bg-purple-100 text-purple-800'],
                                    'completed' => ['label' => 'Selesai', 'class' => 'bg-green-100 text-green-800'],
                                    'cancelled' => ['label' => 'Batal', 'class' => 'bg-red-100 text-red-800']
                                ];
                                $status = $statusConfig[$booking->status] ?? $statusConfig['draft'];
                            @endphp
                            <span class="px-2 py-1 rounded-full text-xs {{ $status['class'] }}">
                                {{ $status['label'] }}
                            </span>
                        </td>
                        <td class="py-3 px-4 text-sm">
                            @php
                                $paymentConfig = [
                                    'unpaid' => ['label' => 'Belum Bayar', 'class' => 'bg-red-100 text-red-800'],
                                    'paid' => ['label' => 'Lunas', 'class' => 'bg-green-100 text-green-800'],
                                    'refunded' => ['label' => 'Dikembalikan', 'class' => 'bg-gray-100 text-gray-800']
                                ];
                                $payment = $paymentConfig[$booking->payment_status] ?? $paymentConfig['unpaid'];
                            @endphp
                            <span class="px-2 py-1 rounded-full text-xs {{ $payment['class'] }}">
                                {{ $payment['label'] }}
                            </span>
                        </td>
                        <td class="py-3 px-4 text-sm">
                            <div class="flex items-center gap-2">
                                <a href="{{ route('admin.pages.booking.show', $booking) }}" 
                                   class="p-1 text-blue-600 hover:bg-blue-50 rounded" title="Lihat Detail">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </a>
                                <a href="{{ route('admin.pages.booking.edit', $booking) }}" 
                                   class="p-1 text-green-600 hover:bg-green-50 rounded" title="Edit">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path>
                                    </svg>
                                </a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        @if($bookings->hasPages())
        <div class="p-4 border-t">
            {{ $bookings->links() }}
        </div>
        @endif
    </div>
</div>
@endsection