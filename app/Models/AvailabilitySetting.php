<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AvailabilitySetting extends Model
{
    use HasFactory;

    protected $fillable = [
        'service_owner_id',
        'service_id',
        'day_of_week',
        'opening_time',
        'closing_time',
        'slot_duration_minutes',
        'break_duration_minutes',
        'break_start_time',
        'is_available'
    ];

    protected $casts = [
        'opening_time' => 'datetime:H:i',
        'closing_time' => 'datetime:H:i',
        'break_start_time' => 'datetime:H:i',
        'is_available' => 'boolean'
    ];

    public function serviceOwner()
    {
        return $this->belongsTo(ServiceOwner::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public static function getDaysOfWeek()
    {
        return [
            'monday' => 'Senin',
            'tuesday' => 'Selasa',
            'wednesday' => 'Rabu',
            'thursday' => 'Kamis',
            'friday' => 'Jumat',
            'saturday' => 'Sabtu',
            'sunday' => 'Minggu'
        ];
    }
}
