@extends('admin.layouts.main')
@section('title', 'Dashboard')

@section('content')
<div class="space-y-6">
    <!-- Stats Cards -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <!-- Today Bookings -->
        <div class="bg-white rounded-lg shadow p-6 dashboard-card">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-blue-100 text-blue-600 stat-icon">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Booking Hari Ini</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $todayBookings }}</p>
                </div>
            </div>
        </div>

        <!-- Week Bookings -->
        <div class="bg-white rounded-lg shadow p-6 dashboard-card">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-green-100 text-green-600 stat-icon">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Booking Minggu Ini</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $weekBookings }}</p>
                </div>
            </div>
        </div>

        <!-- Today Revenue -->
        <div class="bg-white rounded-lg shadow p-6 dashboard-card">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-yellow-100 text-yellow-600 stat-icon">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Pendapatan Hari Ini</p>
                    <p class="text-2xl font-semibold text-gray-900">Rp {{ number_format($todayRevenue, 0, ',', '.') }}</p>
                </div>
            </div>
        </div>

        <!-- Notifications -->
        <div class="bg-white rounded-lg shadow p-6 dashboard-card">
            <div class="flex items-center">
                <div class="p-3 rounded-full bg-red-100 text-red-600 stat-icon">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-5 5v-5zM4 19h6v-2H4v2zM4 15h8v-2H4v2zM4 11h10V9H4v2z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <p class="text-sm font-medium text-gray-600">Booking Pending</p>
                    <p class="text-2xl font-semibold text-gray-900">{{ $newBookings }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Charts Row -->
    <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
        <!-- Booking Trend Chart -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Trend Booking (7 Hari Terakhir)</h3>
            <div class="h-64">
                <canvas id="bookingChart"></canvas>
            </div>
        </div>

        <!-- Revenue Chart -->
        <div class="bg-white rounded-lg shadow p-6">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Pendapatan (7 Hari Terakhir)</h3>
            <div class="h-64">
                <canvas id="revenueChart"></canvas>
            </div>
        </div>
    </div>

    <!-- Schedule Status -->
    <div class="bg-white rounded-lg shadow p-6">
        <h3 class="text-lg font-semibold text-gray-900 mb-4">Status Jadwal Hari Ini</h3>
        <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
            @foreach($scheduleStatus as $slot => $status)
            <div class="text-center p-4 rounded-lg border-2 schedule-slot {{ $status['status_class'] }}
                {{ $status['status_class'] === 'busy' ? 'border-red-200 bg-red-50' : 
                   ($status['status_class'] === 'medium' ? 'border-yellow-200 bg-yellow-50' : 'border-green-200 bg-green-50') }}">
                <div class="text-sm font-medium text-gray-600">{{ $slot }}</div>
                <div class="text-2xl font-bold mt-1 
                    {{ $status['status_class'] === 'busy' ? 'text-red-600' : 
                       ($status['status_class'] === 'medium' ? 'text-yellow-600' : 'text-green-600') }}">
                    {{ $status['count'] }}
                </div>
                <div class="text-xs mt-1 
                    {{ $status['status_class'] === 'busy' ? 'text-red-500' : 
                       ($status['status_class'] === 'medium' ? 'text-yellow-500' : 'text-green-500') }}">
                    {{ $status['status'] }}
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Real data from controller
    const labels = {!! json_encode($last7DaysLabels) !!};
    const bookingData = {!! json_encode($last7DaysBookings) !!};
    const revenueData = {!! json_encode($last7DaysRevenue) !!};

    // Booking Chart
    const bookingCtx = document.getElementById('bookingChart').getContext('2d');
    new Chart(bookingCtx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Booking',
                data: bookingData,
                borderColor: '#10b981',
                backgroundColor: 'rgba(16, 185, 129, 0.1)',
                borderWidth: 2,
                tension: 0.4,
                fill: true
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });

    // Revenue Chart
    const revenueCtx = document.getElementById('revenueChart').getContext('2d');
    new Chart(revenueCtx, {
        type: 'bar',
        data: {
            labels: labels,
            datasets: [{
                label: 'Pendapatan',
                data: revenueData,
                backgroundColor: '#3b82f6',
                borderRadius: 4
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
                legend: {
                    display: false
                }
            },
            scales: {
                y: {
                    beginAtZero: true,
                    grid: {
                        color: 'rgba(0, 0, 0, 0.1)'
                    },
                    ticks: {
                        callback: function(value) {
                            if (value >= 1000000) {
                                return 'Rp ' + (value / 1000000).toFixed(1) + 'M';
                            } else if (value >= 1000) {
                                return 'Rp ' + (value / 1000).toFixed(0) + 'K';
                            }
                            return 'Rp ' + value;
                        }
                    }
                },
                x: {
                    grid: {
                        display: false
                    }
                }
            }
        }
    });
});
</script>
@endsection