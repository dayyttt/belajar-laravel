@extends('admin.layouts.main')

@section('title', 'Kalender Penugasan')

@section('content')
<div class="container-fluid">
    <!-- Page Header -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="d-flex justify-content-between align-items-center">
                <div>
                    <h1 class="h3 mb-0 text-gray-800">Kalender Penugasan</h1>
                    <p class="text-muted">Lihat jadwal penugasan dalam tampilan kalender</p>
                </div>
                <div class="d-flex gap-2">
                    <button class="btn btn-outline-primary" id="prevMonth">
                        <i class="fas fa-chevron-left"></i>
                    </button>
                    <button class="btn btn-outline-primary" id="todayBtn">Hari Ini</button>
                    <button class="btn btn-outline-primary" id="nextMonth">
                        <i class="fas fa-chevron-right"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar Filters -->
    <div class="row mb-4">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="row g-3">
                        <div class="col-md-3">
                            <label class="form-label">Service Owner</label>
                            <select class="form-select" id="ownerFilter">
                                <option value="">Semua Owner</option>
                                <option value="1">John Doe Services</option>
                                <option value="2">ABC Cleaning</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Status</label>
                            <select class="form-select" id="statusFilter">
                                <option value="">Semua Status</option>
                                <option value="scheduled">Terjadwal</option>
                                <option value="in_progress">Sedang Berlangsung</option>
                                <option value="completed">Selesai</option>
                                <option value="cancelled">Dibatalkan</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Layanan</label>
                            <select class="form-select" id="serviceFilter">
                                <option value="">Semua Layanan</option>
                                <option value="1">Cleaning Service</option>
                                <option value="2">Maintenance</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label class="form-label">Tampilan</label>
                            <select class="form-select" id="viewMode">
                                <option value="month">Bulanan</option>
                                <option value="week">Mingguan</option>
                                <option value="day">Harian</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Calendar -->
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <div class="d-flex justify-content-between align-items-center">
                        <h5 class="card-title mb-0" id="currentMonth">Desember 2024</h5>
                        <div class="d-flex gap-2">
                            <span class="badge bg-warning me-2">
                                <i class="fas fa-circle me-1"></i>Terjadwal
                            </span>
                            <span class="badge bg-primary me-2">
                                <i class="fas fa-circle me-1"></i>Berlangsung
                            </span>
                            <span class="badge bg-success me-2">
                                <i class="fas fa-circle me-1"></i>Selesai
                            </span>
                            <span class="badge bg-danger">
                                <i class="fas fa-circle me-1"></i>Dibatalkan
                            </span>
                        </div>
                    </div>
                </div>
                <div class="card-body p-0">
                    <!-- Calendar Grid -->
                    <div class="calendar-container">
                        <div class="calendar-header">
                            <div class="calendar-day-header">Minggu</div>
                            <div class="calendar-day-header">Senin</div>
                            <div class="calendar-day-header">Selasa</div>
                            <div class="calendar-day-header">Rabu</div>
                            <div class="calendar-day-header">Kamis</div>
                            <div class="calendar-day-header">Jumat</div>
                            <div class="calendar-day-header">Sabtu</div>
                        </div>
                        <div class="calendar-body" id="calendarBody">
                            <!-- Calendar days will be generated by JavaScript -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Statistics Cards -->
    <div class="row mt-4">
        <div class="col-md-3">
            <div class="card bg-warning text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">12</h4>
                            <p class="mb-0">Terjadwal</p>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-calendar-alt fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-primary text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">3</h4>
                            <p class="mb-0">Berlangsung</p>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-clock fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-success text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">28</h4>
                            <p class="mb-0">Selesai</p>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-check-circle fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card bg-danger text-white">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="mb-0">2</h4>
                            <p class="mb-0">Dibatalkan</p>
                        </div>
                        <div class="align-self-center">
                            <i class="fas fa-times-circle fa-2x"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.calendar-container {
    display: flex;
    flex-direction: column;
    min-height: 600px;
}

.calendar-header {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    background-color: #f8f9fa;
    border-bottom: 1px solid #dee2e6;
}

.calendar-day-header {
    padding: 15px;
    text-align: center;
    font-weight: 600;
    border-right: 1px solid #dee2e6;
}

.calendar-day-header:last-child {
    border-right: none;
}

.calendar-body {
    display: grid;
    grid-template-columns: repeat(7, 1fr);
    flex: 1;
}

.calendar-day {
    border-right: 1px solid #dee2e6;
    border-bottom: 1px solid #dee2e6;
    min-height: 120px;
    padding: 8px;
    position: relative;
}

.calendar-day:last-child {
    border-right: none;
}

.calendar-day.other-month {
    background-color: #f8f9fa;
    color: #6c757d;
}

.calendar-day.today {
    background-color: #e3f2fd;
}

.calendar-day-number {
    font-weight: 600;
    margin-bottom: 5px;
}

.calendar-event {
    background-color: #007bff;
    color: white;
    padding: 2px 6px;
    border-radius: 3px;
    font-size: 11px;
    margin-bottom: 2px;
    cursor: pointer;
}

.calendar-event.warning {
    background-color: #ffc107;
    color: #000;
}

.calendar-event.success {
    background-color: #28a745;
}

.calendar-event.danger {
    background-color: #dc3545;
}
</style>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Initialize calendar
    generateCalendar();
    
    // Event listeners
    document.getElementById('prevMonth').addEventListener('click', function() {
        // Previous month logic
        console.log('Previous month');
    });
    
    document.getElementById('nextMonth').addEventListener('click', function() {
        // Next month logic
        console.log('Next month');
    });
    
    document.getElementById('todayBtn').addEventListener('click', function() {
        // Go to today logic
        console.log('Go to today');
    });
});

function generateCalendar() {
    const calendarBody = document.getElementById('calendarBody');
    const today = new Date();
    const currentMonth = today.getMonth();
    const currentYear = today.getFullYear();
    
    // Sample calendar generation
    const daysInMonth = new Date(currentYear, currentMonth + 1, 0).getDate();
    const firstDay = new Date(currentYear, currentMonth, 1).getDay();
    
    let html = '';
    
    // Previous month days
    for (let i = 0; i < firstDay; i++) {
        html += '<div class="calendar-day other-month"></div>';
    }
    
    // Current month days
    for (let day = 1; day <= daysInMonth; day++) {
        const isToday = day === today.getDate() && currentMonth === today.getMonth() && currentYear === today.getFullYear();
        const todayClass = isToday ? 'today' : '';
        
        html += `
            <div class="calendar-day ${todayClass}">
                <div class="calendar-day-number">${day}</div>
                ${getSampleEvents(day)}
            </div>
        `;
    }
    
    calendarBody.innerHTML = html;
}

function getSampleEvents(day) {
    // Sample events for demonstration
    if (day === 15) {
        return '<div class="calendar-event warning">09:00 Cleaning Service</div>';
    } else if (day === 20) {
        return '<div class="calendar-event success">14:00 Maintenance</div>';
    } else if (day === 25) {
        return '<div class="calendar-event">10:00 Repair Service</div>';
    }
    return '';
}
</script>
@endsection