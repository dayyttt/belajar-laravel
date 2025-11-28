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
        'position',
        'office',
        'age',
        'start_date',
        'salary',
        'is_active',
    ];

    // Konversi tipe data
    protected $casts = [
        'start_date' => 'date',
        'is_active' => 'boolean',
    ];
}