<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Invoice;
use App\Models\Payment;
use App\Models\ServiceOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    public function ownerRevenue(Request $request)
    {
        $query = ServiceOwner::with(['services.bookings.invoice'])
                           ->withCount(['services']);

        $owners = $query->get()->map(function ($owner) use ($request) {
            $totalRevenue = 0;
            $ownerShare = 0;
            
            foreach ($owner->services as $service) {
                foreach ($service->bookings as $booking) {
                    if ($booking->invoice) {
                        $invoiceAmount = $booking->invoice->total_amount;
                        $totalRevenue += $invoiceAmount;
                        
                        // Assuming 70% to owner, 30% to platform (configurable)
                        $ownerShare += $invoiceAmount * 0.7;
                    }
                }
            }

            return [
                'owner' => $owner,
                'total_revenue' => $totalRevenue,
                'owner_share' => $ownerShare,
                'platform_share' => $totalRevenue - $ownerShare,
                'service_count' => $owner->services_count,
                'booking_count' => $owner->services->sum(function ($service) {
                    return $service->bookings->count();
                })
            ];
        });

        // Filter by date range if provided
        if ($request->date_from || $request->date_to) {
            // Apply date filtering logic here
        }

        $totalAllRevenue = $owners->sum('total_revenue');
        $totalAllOwnerShare = $owners->sum('owner_share');
        $totalAllPlatformShare = $owners->sum('platform_share');

        return view('admin.reports.owner-revenue', compact(
            'owners', 
            'totalAllRevenue', 
            'totalAllOwnerShare', 
            'totalAllPlatformShare'
        ));
    }

    public function paymentSummary(Request $request)
    {
        $payments = Payment::with(['invoice.customer', 'processor'])
                          ->when($request->date_from, function($q) use ($request) {
                              return $q->whereDate('payment_date', '>=', $request->date_from);
                          })
                          ->when($request->date_to, function($q) use ($request) {
                              return $q->whereDate('payment_date', '<=', $request->date_to);
                          })
                          ->where('status', 'completed')
                          ->orderBy('payment_date', 'desc')
                          ->get();

        $summary = [
            'total_amount' => $payments->sum('amount'),
            'cash_total' => $payments->where('payment_method', 'cash')->sum('amount'),
            'transfer_total' => $payments->where('payment_method', 'transfer')->sum('amount'),
            'qris_total' => $payments->where('payment_method', 'qris')->sum('amount'),
            'other_total' => $payments->where('payment_method', 'other')->sum('amount'),
            'payment_count' => $payments->count(),
        ];

        return view('admin.reports.payment-summary', compact('payments', 'summary'));
    }
}