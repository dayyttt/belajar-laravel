<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Booking extends Model
{
    protected $fillable = [
        'customer_name',
        'customer_email',
        'customer_phone',
        'booking_date',
        'start_time',
        'end_time',
        'notes',
        'status',
        'total_amount',
    ];

    protected $dates = [
        'booking_date',
    ];

    public function payment(): HasOne
    {
        return $this->hasOne(Payment::class);
    }
}
