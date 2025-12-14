<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Booking extends Model
{
    protected $fillable = [
        'customer_id',
        'customer_name',
        'customer_email', 
        'customer_phone',
        'service_id',
        'service_owner_id',
        'slot_id',
        'booking_date',
        'start_time',
        'end_time',
        'notes',
        'customer_notes',
        'internal_notes',
        'status',
        'source',
        'created_by',
        'total_amount',
    ];

    protected $casts = [
        'booking_date' => 'date',
        'total_amount' => 'decimal:2',
    ];

    // Relations
    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }

    public function invoice(): HasOne
    {
        return $this->hasOne(Invoice::class);
    }

    public function customer(): BelongsTo
    {
        return $this->belongsTo(Customer::class);
    }

    public function service(): BelongsTo
    {
        return $this->belongsTo(Service::class);
    }

    public function serviceOwner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'service_owner_id');
    }

    public function slot(): BelongsTo
    {
        return $this->belongsTo(Slot::class);
    }

    public function createdBy(): BelongsTo
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    // Scopes
    public function scopeByStatus($query, $status)
    {
        return $query->where('status', $status);
    }

    public function scopeBySource($query, $source)
    {
        return $query->where('source', $source);
    }

    public function scopeByDate($query, $date)
    {
        return $query->whereDate('booking_date', $date);
    }

    // Accessors
    public function getStatusLabelAttribute()
    {
        $labels = [
            'draft' => 'Draft',
            'waiting_confirmation' => 'Menunggu Konfirmasi',
            'confirmed' => 'Dikonfirmasi',
            'completed' => 'Selesai',
            'cancelled' => 'Dibatalkan'
        ];

        return $labels[$this->status] ?? $this->status;
    }

    public function getStatusColorAttribute()
    {
        $colors = [
            'draft' => 'secondary',
            'waiting_confirmation' => 'warning',
            'confirmed' => 'info',
            'completed' => 'success',
            'cancelled' => 'danger'
        ];

        return $colors[$this->status] ?? 'secondary';
    }

    public function getSourceLabelAttribute()
    {
        $labels = [
            'manual' => 'Manual',
            'whatsapp' => 'WhatsApp',
            'phone' => 'Telepon',
            'app' => 'Mobile App',
            'website' => 'Website'
        ];

        return $labels[$this->source] ?? $this->source;
    }

    public function getFormattedAmountAttribute()
    {
        return 'Rp ' . number_format($this->total_amount, 0, ',', '.');
    }
}