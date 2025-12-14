<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Customer extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'phone',
        'email',
        'address',
        'notes',
        'preferences'
    ];

    protected $casts = [
        'preferences' => 'array'
    ];

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class);
    }

    public function getBookingHistoryAttribute()
    {
        return $this->bookings()
            ->with('payment')
            ->orderBy('booking_date', 'desc')
            ->get();
    }
}