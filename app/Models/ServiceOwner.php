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
        'service_area',
        'commission_rate',
        'is_active',
        'join_date'
    ];

    protected $casts = [
        'is_active' => 'boolean',
        'join_date' => 'date',
        'commission_rate' => 'decimal:2'
    ];

    public function services()
    {
        return $this->hasMany(Service::class, 'owner_id');
    }
}