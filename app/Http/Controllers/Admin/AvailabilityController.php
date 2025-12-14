<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AvailabilitySetting;
use App\Models\ServiceOwner;
use App\Models\Service;
use Illuminate\Http\Request;

class AvailabilityController extends Controller
{
    public function index()
    {
        $settings = AvailabilitySetting::with(['serviceOwner', 'service'])
            ->orderBy('day_of_week')
            ->get();
        
        return view('admin.pages.ketersediaan.availability.index', compact('settings'));
    }

    public function create()
    {
        $serviceOwners = ServiceOwner::all();
        $services = Service::all();
        $daysOfWeek = AvailabilitySetting::getDaysOfWeek();
        
        return view('admin.pages.ketersediaan.availability.create', compact('serviceOwners', 'services', 'daysOfWeek'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'service_owner_id' => 'required|exists:service_owners,id',
            'service_id' => 'nullable|exists:services,id',
            'day_of_week' => 'required|in:monday,tuesday,wednesday,thursday,friday,saturday,sunday',
            'opening_time' => 'required|date_format:H:i',
            'closing_time' => 'required|date_format:H:i|after:opening_time',
            'slot_duration_minutes' => 'required|integer|min:15|max:240',
            'break_duration_minutes' => 'nullable|integer|min:0',
            'break_start_time' => 'nullable|date_format:H:i',
            'is_available' => 'boolean'
        ]);

        AvailabilitySetting::create($validated);

        return redirect()->route('admin.availability.index')
            ->with('success', 'Pengaturan ketersediaan berhasil ditambahkan');
    }

    public function edit(AvailabilitySetting $availability)
    {
        $serviceOwners = ServiceOwner::all();
        $services = Service::all();
        $daysOfWeek = AvailabilitySetting::getDaysOfWeek();
        
        return view('admin.pages.ketersediaan.availability.edit', compact('availability', 'serviceOwners', 'services', 'daysOfWeek'));
    }

    public function update(Request $request, AvailabilitySetting $availability)
    {
        $validated = $request->validate([
            'service_owner_id' => 'required|exists:service_owners,id',
            'service_id' => 'nullable|exists:services,id',
            'day_of_week' => 'required|in:monday,tuesday,wednesday,thursday,friday,saturday,sunday',
            'opening_time' => 'required|date_format:H:i',
            'closing_time' => 'required|date_format:H:i|after:opening_time',
            'slot_duration_minutes' => 'required|integer|min:15|max:240',
            'break_duration_minutes' => 'nullable|integer|min:0',
            'break_start_time' => 'nullable|date_format:H:i',
            'is_available' => 'boolean'
        ]);

        $availability->update($validated);

        return redirect()->route('admin.availability.index')
            ->with('success', 'Pengaturan ketersediaan berhasil diperbarui');
    }

    public function destroy(AvailabilitySetting $availability)
    {
        $availability->delete();
        return redirect()->route('admin.availability.index')
            ->with('success', 'Pengaturan ketersediaan berhasil dihapus');
    }

    public function calendar()
    {
        $date = request('date', now()->format('Y-m-d'));
        $serviceOwnerId = request('service_owner_id');
        $serviceId = request('service_id');

        $query = \App\Models\TimeSlot::with(['schedule.service', 'schedule.serviceOwner', 'bookedBy'])
            ->whereDate('start_datetime', $date);

        if ($serviceOwnerId) {
            $query->whereHas('schedule', function($q) use ($serviceOwnerId) {
                $q->where('service_owner_id', $serviceOwnerId);
            });
        }

        if ($serviceId) {
            $query->whereHas('schedule', function($q) use ($serviceId) {
                $q->where('service_id', $serviceId);
            });
        }

        $timeSlots = $query->orderBy('start_datetime')->get();
        $serviceOwners = ServiceOwner::all();
        $services = Service::all();

        return view('admin.pages.ketersediaan.availability.calendar', compact('timeSlots', 'date', 'serviceOwners', 'services'));
    }
}