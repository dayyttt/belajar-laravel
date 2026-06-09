<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use App\Models\Service;
use App\Models\Customer;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::today();
        $startOfWeek = Carbon::now()->startOfWeek();
        $endOfWeek = Carbon::now()->endOfWeek();
        $startOfMonth = Carbon::now()->startOfMonth();
        $endOfMonth = Carbon::now()->endOfMonth();

        // Get booking statistics
        $todayBookings = Booking::whereDate('booking_date', $today)->count();
        $weekBookings = Booking::whereBetween('booking_date', [$startOfWeek, $endOfWeek])->count();
        $monthBookings = Booking::whereBetween('booking_date', [$startOfMonth, $endOfMonth])->count();

        // Get revenue statistics
        $todayRevenue = Payment::whereDate('payment_date', $today)->sum('amount');
        $weekRevenue = Payment::whereBetween('payment_date', [$startOfWeek, $endOfWeek])->sum('amount');
        $monthRevenue = Payment::whereBetween('payment_date', [$startOfMonth, $endOfMonth])->sum('amount');

        // Get last 7 days data for charts
        $last7DaysBookings = [];
        $last7DaysRevenue = [];
        $last7DaysLabels = [];
        
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::now()->subDays($i);
            $last7DaysLabels[] = $date->format('D, j');
            
            $dayBookings = Booking::whereDate('booking_date', $date)->count();
            $dayRevenue = Payment::whereDate('payment_date', $date)->sum('amount');
            
            $last7DaysBookings[] = $dayBookings;
            $last7DaysRevenue[] = $dayRevenue;
        }

        // Get schedule status for today
        $timeSlots = [
            '08:00-10:00' => ['start' => '08:00', 'end' => '10:00'],
            '10:00-12:00' => ['start' => '10:00', 'end' => '12:00'],
            '13:00-15:00' => ['start' => '13:00', 'end' => '15:00'],
            '15:00-17:00' => ['start' => '15:00', 'end' => '17:00'],
        ];

        $scheduleStatus = [];
        foreach ($timeSlots as $slot => $times) {
            $count = Booking::whereDate('booking_date', $today)
                ->whereTime('start_time', '>=', $times['start'])
                ->whereTime('end_time', '<=', $times['end'])
                ->count();
            
            $scheduleStatus[$slot] = [
                'count' => $count,
                'status' => $count > 2 ? 'Ramai' : ($count > 0 ? 'Sedang' : 'Kosong'),
                'status_class' => $count > 2 ? 'busy' : ($count > 0 ? 'medium' : 'available')
            ];
        }

        // Get notifications
        $newBookings = Booking::where('status', 'waiting_confirmation')->count();
        $pendingPayments = Payment::where('status', 'pending')->count();
        $totalServices = Service::where('is_active', true)->count();
        $totalCustomers = Customer::count();

        return view('admin.pages.dashboard.index', compact(
            'todayBookings',
            'weekBookings',
            'monthBookings',
            'todayRevenue',
            'weekRevenue',
            'monthRevenue',
            'scheduleStatus',
            'newBookings',
            'pendingPayments',
            'totalServices',
            'totalCustomers',
            'last7DaysBookings',
            'last7DaysRevenue',
            'last7DaysLabels'
        ));
    }
}