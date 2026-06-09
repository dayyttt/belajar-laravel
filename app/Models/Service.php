<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Service extends Model
{
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'duration',
        'base_price',
        'price_unit',
        'is_active',
        'owner_id',
        'rating',
        'bookings_count'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'base_price' => 'decimal:2',
        'rating' => 'decimal:2',
        'bookings_count' => 'integer'
    ];

    // Relations
    public function category(): BelongsTo
    {
        return $this->belongsTo(Kategori::class, 'category_id');
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(ServiceOwner::class, 'owner_id');
    }

    public function bookings(): HasMany
    {
        return $this->hasMany(Booking::class, 'service_id');
    }

    // Accessors
    public function getFormattedPriceAttribute()
    {
        return 'Rp ' . number_format($this->base_price, 0, ',', '.');
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

    public function scopeByCategory($query, $categoryId)
    {
        return $query->where('category_id', $categoryId);
    }

    public function scopeByOwner($query, $ownerId)
    {
        return $query->where('owner_id', $ownerId);
    }
}