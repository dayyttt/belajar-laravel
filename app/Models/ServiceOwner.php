<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceOwner extends Model
{
    use HasFactory;

    protected $fillable = [
        'brand_name',
        'pic_name',
        'email',
        'phone',
        'address',
        'category_id',
        'service_area',
        'commission_rate',
        'is_active',
        'is_verified',
        'rating',
        'total_revenue',
        'join_date'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'is_verified' => 'boolean',
        'join_date' => 'date',
        'commission_rate' => 'decimal:2',
        'rating' => 'decimal:2',
        'total_revenue' => 'decimal:2'
    ];

    // Relations
    public function services()
    {
        return $this->hasMany(Service::class, 'owner_id');
    }

    public function category()
    {
        return $this->belongsTo(Kategori::class, 'category_id');
    }

    // Accessors
    public function getServicesCountAttribute()
    {
        return $this->services()->count();
    }

    public function getBookingsCountAttribute()
    {
        return $this->services()->withCount('bookings')->get()->sum('bookings_count');
    }

    public function getFormattedRevenueAttribute()
    {
        return 'Rp ' . number_format($this->total_revenue, 0, ',', '.');
    }

    public function getFormattedRatingAttribute()
    {
        return number_format($this->rating, 1);
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    public function scopeVerified($query)
    {
        return $query->where('is_verified', true);
    }

    public function scopePending($query)
    {
        return $query->where('is_active', false);
    }
}