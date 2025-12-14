<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

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
        'display_order',
        'owner_id',
        'image_path'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'base_price' => 'float',
        'duration' => 'integer',
        'display_order' => 'integer'
    ];

    public const PRICE_UNITS = [
        'session' => 'Per Sesi',
        'hour' => 'Per Jam',
        'day' => 'Per Hari'
    ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(ServiceCategory::class, 'category_id');
    }

    public function owner(): BelongsTo
    {
        return $this->belongsTo(User::class, 'owner_id');
    }

    public function packages(): BelongsToMany
    {
        return $this->belongsToMany(ServicePackage::class, 'package_service')
            ->withPivot('quantity', 'discount_amount')
            ->withTimestamps();
    }
}