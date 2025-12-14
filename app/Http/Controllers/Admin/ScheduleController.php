<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Schedule;
use App\Models\TimeSlot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
    public function index()
    {
        $schedules = Schedule::with('timeSlots')
            ->orderBy('date', 'desc')
            ->get();
        
        return view('admin.pages.ketersediaan.schedules.index', compact('schedules'));
    }

    public function create()
    {
        return view('admin.pages.ketersediaan.schedules.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date|after_or_equal:today',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'duration' => 'required|integer|min:15|max:480',
            'status' => 'required|in:active,inactive'
        ]);

        Schedule::create($validated);

        return redirect()
            ->route('admin.pages.ketersediaan.schedules.index')
            ->with('success', 'Jadwal berhasil ditambahkan');
    }

    public function edit($id)
    {
        $schedule = Schedule::findOrFail($id);
        return view('admin.pages.ketersediaan.schedules.edit', compact('schedule'));
    }

    public function update(Request $request, $id)
    {
        $schedule = Schedule::findOrFail($id);
        
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'date' => 'required|date|after_or_equal:today',
            'start_time' => 'required|date_format:H:i',
            'end_time' => 'required|date_format:H:i|after:start_time',
            'duration' => 'required|integer|min:15|max:480',
            'status' => 'required|in:active,inactive'
        ]);

        $schedule->update($validated);

        return redirect()
            ->route('admin.pages.ketersediaan.schedules.index')
            ->with('success', 'Jadwal berhasil diperbarui');
    }

    public function destroy($id)
    {
        $schedule = Schedule::findOrFail($id);
        $schedule->delete();
        
        return redirect()
            ->route('admin.pages.ketersediaan.schedules.index')
            ->with('success', 'Jadwal berhasil dihapus');
    }

    public function generateSlots(Request $request, $scheduleId)
    {
        DB::beginTransaction();
        
        try {
            $schedule = Schedule::findOrFail($scheduleId);
            
            // Hapus slot yang sudah ada
            TimeSlot::where('schedule_id', $schedule->id)->delete();
            
            $startTime = strtotime($schedule->start_time);
            $endTime = strtotime($schedule->end_time);
            $duration = $schedule->duration; // dalam menit
            $slots = [];
            
            while ($startTime < $endTime) {
                $slotEndTime = strtotime("+{$duration} minutes", $startTime);
                
                if ($slotEndTime > $endTime) {
                    break;
                }
                
                $slots[] = [
                    'schedule_id' => $schedule->id,
                    'start_time' => date('H:i:s', $startTime),
                    'end_time' => date('H:i:s', $slotEndTime),
                    'status' => 'available',
                    'created_at' => now(),
                    'updated_at' => now()
                ];
                
                $startTime = $slotEndTime;
            }
            
            // Insert semua slot sekaligus
            TimeSlot::insert($slots);
            
            DB::commit();
            
            return redirect()
                ->route('admin.pages.ketersediaan.schedules.index')
                ->with('success', count($slots) . ' slot berhasil digenerate');
                
        } catch (\Exception $e) {
            DB::rollBack();
            
            return redirect()
                ->back()
                ->with('error', 'Gagal generate slots: ' . $e->getMessage());
        }
    }
}