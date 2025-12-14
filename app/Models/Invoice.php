<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Invoice extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_number',
        'booking_id',
        'customer_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'subtotal',
        'additional_fee',
        'discount',
        'tax',
        'total_amount',
        'status',
        'payment_status',
        'invoice_date',
        'due_date',
        'notes',
        'terms_conditions',
        'created_by',
    ];

    protected $casts = [
        'subtotal' => 'decimal:2',
        'additional_fee' => 'decimal:2',
        'discount' => 'decimal:2',
        'tax' => 'decimal:2',
        'total_amount' => 'decimal:2',
        'invoice_date' => 'date',
        'due_date' => 'date',
    ];

    // Relations
    public function booking()
    {
        return $this->belongsTo(Booking::class);
    }

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Scopes
    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeByPaymentStatus($query, $paymentStatus)
    {
        return $query->where('payment_status', $paymentStatus);
    }

    public function scopeOverdue($query)
    {
        return $query->where('due_date', '<', now())
                    ->where('payment_status', '!=', 'paid');
    }

    // Accessors
    public function getFormattedInvoiceNumberAttribute()
    {
        return 'INV-' . date('Y', strtotime($this->created_at)) . '-' . str_pad($this->id, 6, '0', STR_PAD_LEFT);
    }

    public function getPaidAmountAttribute()
    {
        return $this->payments()->where('status', 'completed')->sum('amount');
    }

    public function getRemainingAmountAttribute()
    {
        return $this->total_amount - $this->paid_amount;
    }

    // Methods
    public function generateInvoiceNumber()
    {
        $year = date('Y');
        $month = date('m');
        $lastInvoice = self::whereMonth('created_at', $month)
                          ->whereYear('created_at', $year)
                          ->orderBy('id', 'desc')
                          ->first();

        $sequence = $lastInvoice ? $lastInvoice->id + 1 : 1;
        $this->invoice_number = "INV{$year}{$month}" . str_pad($sequence, 4, '0', STR_PAD_LEFT);
        
        return $this->invoice_number;
    }

    public function updatePaymentStatus()
    {
        $paidAmount = $this->paid_amount;
        
        if ($paidAmount >= $this->total_amount) {
            $this->payment_status = 'paid';
            $this->status = 'paid';
        } elseif ($paidAmount > 0) {
            $this->payment_status = 'dp';
            $this->status = 'partial';
        } else {
            $this->payment_status = 'unpaid';
        }
        
        $this->save();
    }
    // Accessors untuk status labels dan colors
    public function getStatusLabelAttribute()
    {
        $labels = [
            'draft' => 'Draft',
            'sent' => 'Terkirim',
            'partial' => 'Sebagian',
            'paid' => 'Lunas',
            'overdue' => 'Terlambat',
            'cancelled' => 'Dibatalkan'
        ];
    
        return $labels[$this->status] ?? 'Unknown';
    }

    public function getStatusColorAttribute()
    {
        $colors = [
            'draft' => 'secondary',
            'sent' => 'info',
            'partial' => 'warning',
            'paid' => 'success',
            'overdue' => 'danger',
            'cancelled' => 'dark'
        ];
    
        return $colors[$this->status] ?? 'secondary';
    }

    public function getPaymentStatusLabelAttribute()
    {
        $labels = [
            'unpaid' => 'Belum Bayar',
            'dp' => 'DP',
            'paid' => 'Lunas'
        ];
    
        return $labels[$this->payment_status] ?? 'Unknown';
    }

    public function getPaymentStatusColorAttribute()
    {
        $colors = [
            'unpaid' => 'danger',
            'dp' => 'warning',
            'paid' => 'success'
        ];
    
        return $colors[$this->payment_status] ?? 'secondary';
    }

    public function getFormattedTotalAmountAttribute()
    {
        return 'Rp ' . number_format($this->total_amount, 0, ',', '.');
    }

    public function getFormattedPaidAmountAttribute()
    {
        return 'Rp ' . number_format($this->paid_amount, 0, ',', '.');
    }

    public function getFormattedRemainingAmountAttribute()
    {
        return 'Rp ' . number_format($this->remaining_amount, 0, ',', '.');
    }
}