<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Layanan extends Model
{
    use HasFactory;
    
    // Nama tabel di database
    protected $table = 'layanan'; 
    
    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'kategori_id',
        'name',
        'slug',
        'description',
        'price',
        'duration',
        'image',
        'features',
        'is_active',
    ];

    // Konversi tipe data untuk kolom JSON
    protected $casts = [
        'features' => 'array',
        'is_active' => 'boolean',
    ];

    // Relasi ke Kategori (One-to-Many inverse)
    public function kategori()
    {
        return $this->belongsTo(Kategori::class, 'kategori_id');
    }

    // Relasi ke ServiceMedia (One-to-Many)
    public function media()
    {
        return $this->hasMany(ServiceMedia::class, 'layanan_id');
    }
}