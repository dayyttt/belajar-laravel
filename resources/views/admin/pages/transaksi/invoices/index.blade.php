@extends('admin.layouts.main')
@section('title', 'Invoices Management')

@section('content')
<div class="space-y-6">
    <!-- Page Header -->
    <div class="flex items-center justify-between">
        <div>
            <h1 class="text-2xl font-bold text-gray-900">Invoices</h1>
            <p class="text-gray-600 mt-1">Kelola faktur dan tagihan</p>
        </div>
        <div class="flex gap-2">
            <button class="border border-gray-300 text-gray-700 px-4 py-2 rounded-lg inline-flex items-center hover:bg-gray-50">
                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                </svg>
                Export Excel
            </button>
        </div>
    </div>

    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-green-50 border border-green-200 rounded-lg p-4">
            <div class="text-sm text-green-800">Total Revenue (Paid)</div>
            <div class="text-2xl font-bold text-green-900 mt-1">
                Rp {{ number_format($totalRevenue / 1000000, 1, ',', '.') }}M
            </div>
            <div class="text-xs text-green-700 mt-1">
                {{ $paidInvoicesCount }} invoices
            </div>
        </div>
        <div class="bg-yellow-50 border border-yellow-200 rounded-lg p-4">
            <div class="text-sm text-yellow-800">Pending Payment</div>
            <div class="text-2xl font-bold text-yellow-900 mt-1">
                Rp {{ number_format($pendingAmount / 1000, 0, ',', '.') }}K
            </div>
            <div class="text-xs text-yellow-700 mt-1">
                {{ $pendingInvoicesCount }} invoices
            </div>
        </div>
        <div class="bg-red-50 border border-red-200 rounded-lg p-4">
            <div class="text-sm text-red-800">Overdue</div>
            <div class="text-2xl font-bold text-red-900 mt-1">
                Rp {{ number_format($overdueAmount / 1000, 0, ',', '.') }}K
            </div>
            <div class="text-xs text-red-700 mt-1">
                {{ $overdueInvoicesCount }} invoices
            </div>
        </div>
        <div class="bg-gray-50 border border-gray-200 rounded-lg p-4">
            <div class="text-sm text-gray-800">Total Invoices</div>
            <div class="text-2xl font-bold text-gray-900 mt-1">{{ $totalInvoicesCount }}</div>
            <div class="text-xs text-gray-600 mt-1">
                This month
            </div>
        </div>
    </div>

    <!-- Filters -->
    <div class="bg-white rounded-lg shadow p-4">
        <form method="GET" class="flex flex-col md:flex-row gap-4">
            <div class="flex-1 relative">
                <svg class="absolute left-3 top-1/2 -translate-y-1/2 w-5 h-5 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                </svg>
                <input type="search" name="search" placeholder="Cari invoice berdasarkan ID, customer, atau layanan..." 
                       value="{{ request('search') }}" class="pl-10 w-full px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
            </div>
            <div class="flex gap-2">
                <select name="status" class="px-3 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500">
                    <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>Semua Status</option>
                    <option value="paid" {{ request('status') == 'paid' ? 'selected' : '' }}>Lunas</option>
                    <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Menunggu</option>
                    <option value="overdue" {{ request('status') == 'overdue' ? 'selected' : '' }}>Terlambat</option>
                    <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Dibatalkan</option>
                </select>
            </div>
        </form>
    </div>

    <!-- Invoices Table -->
    <div class="bg-white rounded-lg shadow">
        <div class="overflow-x-auto">
            <table class="w-full">
                <thead class="bg-gray-50">
                    <tr>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Invoice ID</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Booking ID</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Customer</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Service</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Provider</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Issue Date</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Due Date</th>
                        <th class="text-right py-3 px-4 text-sm font-semibold text-gray-700">Amount</th>
                        <th class="text-right py-3 px-4 text-sm font-semibold text-gray-700">Tax</th>
                        <th class="text-right py-3 px-4 text-sm font-semibold text-gray-700">Total</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Status</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Payment</th>
                        <th class="text-left py-3 px-4 text-sm font-semibold text-gray-700">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($invoices as $invoice)
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4 text-sm text-gray-900 font-medium">{{ $invoice->invoice_number }}</td>
                        <td class="py-3 px-4 text-sm text-gray-700">{{ $invoice->booking->booking_number ?? '-' }}</td>
                        <td class="py-3 px-4 text-sm text-gray-900">{{ $invoice->customer_name }}</td>
                        <td class="py-3 px-4 text-sm text-gray-700">{{ $invoice->booking->service->name ?? '-' }}</td>
                        <td class="py-3 px-4 text-sm text-gray-700">{{ $invoice->booking->service->serviceOwner->name ?? '-' }}</td>
                        <td class="py-3 px-4 text-sm text-gray-700">{{ $invoice->issue_date->format('Y-m-d') }}</td>
                        <td class="py-3 px-4 text-sm text-gray-700">{{ $invoice->due_date->format('Y-m-d') }}</td>
                        <td class="py-3 px-4 text-sm text-gray-900 text-right">{{ $invoice->formatted_amount }}</td>
                        <td class="py-3 px-4 text-sm text-gray-700 text-right">{{ $invoice->formatted_tax }}</td>
                        <td class="py-3 px-4 text-sm text-gray-900 text-right font-semibold">{{ $invoice->formatted_total }}</td>
                        <td class="py-3 px-4 text-sm">
                            @php
                                $statusConfig = [
                                    'paid' => ['label' => 'Lunas', 'class' => 'bg-green-100 text-green-800', 'icon' => true],
                                    'pending' => ['label' => 'Menunggu', 'class' => 'bg-yellow-100 text-yellow-800', 'icon' => false],
                                    'overdue' => ['label' => 'Terlambat', 'class' => 'bg-red-100 text-red-800', 'icon' => false],
                                    'cancelled' => ['label' => 'Dibatalkan', 'class' => 'bg-gray-100 text-gray-800', 'icon' => true]
                                ];
                                $status = $statusConfig[$invoice->status] ?? $statusConfig['pending'];
                            @endphp
                            <span class="px-2 py-1 rounded-full text-xs flex items-center gap-1 inline-flex {{ $status['class'] }}">
                                @if($status['icon'])
                                    <svg class="w-3 h-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        @if($invoice->status == 'paid')
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                                        @else
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                                        @endif
                                    </svg>
                                @endif
                                {{ $status['label'] }}
                            </span>
                        </td>
                        <td class="py-3 px-4 text-sm text-gray-700">
                            {{ $invoice->payment_method ?? '-' }}
                        </td>
                        <td class="py-3 px-4 text-sm">
                            <div class="flex items-center gap-2">
                                <a href="{{ route('admin.pages.transaksi.invoices.show', $invoice) }}" 
                                   class="p-1 text-blue-600 hover:bg-blue-50 rounded" title="Lihat Detail">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path>
                                    </svg>
                                </a>
                                <a href="#" class="p-1 text-green-600 hover:bg-green-50 rounded" title="Download PDF">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 10v6m0 0l-3-3m3 3l3-3m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                                    </svg>
                                </a>
                                @if($invoice->status == 'pending')
                                <a href="#" class="p-1 text-purple-600 hover:bg-purple-50 rounded" title="Kirim Reminder">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"></path>
                                    </svg>
                                </a>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="13" class="text-center py-8 text-gray-500">Tidak ada data invoice</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if($invoices->hasPages())
        <div class="p-4 border-t">
            {{ $invoices->withQueryString()->links() }}
        </div>
        @endif
    </div>
</div>
@endsection