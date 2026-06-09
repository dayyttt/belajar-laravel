<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SiteSetting extends Model
{
    protected $fillable = [
        'site_name',
        'logo',
        'favicon',
        'primary_color',
        'secondary_color',
        'phone',
        'whatsapp',
        'email',
        'address',
        'facebook',
        'twitter',
        'instagram',
        'youtube'
    ];

    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime'
    ];
}
