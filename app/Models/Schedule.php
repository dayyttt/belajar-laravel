<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    use HasFactory;

    protected $fillable = [
    'title',
    'description',
    'date',
    'start_time',
    'end_time',
    'duration',
    'status'
    ];

    protected $casts = [
        'date' => 'date',
        'start_time' => 'datetime:H:i',
        'end_time' => 'datetime:H:i',
        'is_recurring' => 'boolean',
        'recurring_pattern' => 'array'
    ];

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function serviceOwner()
    {
        return $this->belongsTo(ServiceOwner::class);
    }

    public function timeSlots()
    {
        return $this->hasMany(TimeSlot::class);
    }

    public function generateTimeSlots()
    {
        $slots = [];
        $currentStart = $this->date->copy()->setTimeFromTimeString($this->start_time);
        $endDateTime = $this->date->copy()->setTimeFromTimeString($this->end_time);

        while ($currentStart < $endDateTime) {
            $currentEnd = $currentStart->copy()->addMinutes($this->duration);
            
            if ($currentEnd <= $endDateTime) {
                $slots[] = [
                    'schedule_id' => $this->id,
                    'start_datetime' => $currentStart,
                    'end_datetime' => $currentEnd,
                    'duration_minutes' => $this->duration,
                    'status' => 'available',
                    'price' => $this->service->base_price ?? 0,
                    'created_at' => now(),
                    'updated_at' => now()
                ];
            }

            $currentStart = $currentEnd;
        }

        return $slots;
    }
}