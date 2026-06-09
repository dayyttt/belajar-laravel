<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategori';
    protected $fillable = [
        'name',
        'description',
        'icon',
        'is_active',
    ];

    // Konversi tipe data
    protected $casts = [
        'is_active' => 'boolean',
    ];

    // Relations
    public function services()
    {
        return $this->hasMany(Service::class, 'category_id');
    }

    // Scopes
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    // Accessors
    public function getServicesCountAttribute()
    {
        return $this->services()->count();
    }

    public function getBookingsCountAttribute()
    {
        return $this->services()->with('bookings')->get()->sum(function($service) {
            return $service->bookings->count();
        });
    }
}