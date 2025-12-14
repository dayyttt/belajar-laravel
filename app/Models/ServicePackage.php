<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class ServicePackage extends Model
{
    protected $fillable = [
        'name',
        'description',
        'total_price',
        'discount_amount',
        'final_price',
        'is_active',
        'valid_until',
        'owner_id'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'total_price' => 'float',
        'discount_amount' => 'float',
        'final_price' => 'float',
        'valid_until' => 'datetime'
    ];

    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'package_service')
            ->withPivot('quantity', 'discount_amount')
            ->withTimestamps();
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }
}