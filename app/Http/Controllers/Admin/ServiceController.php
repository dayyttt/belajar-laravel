<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Kategori;
use App\Models\ServiceOwner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with(['category', 'owner', 'bookings'])->latest()->get();
        $categories = Kategori::all();
        $owners = ServiceOwner::all();
        
        return view('admin.pages.services.services.index', compact('services', 'categories', 'owners'));
    }

    public function create()
    {
        $categories = Kategori::where('is_active', true)->get();
        $owners = ServiceOwner::where('is_active', true)->get();
        
        return view('admin.pages.services.services.create', compact('categories', 'owners'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:kategori,id',
            'description' => 'required|string',
            'duration' => 'required|string|max:100',
            'base_price' => 'required|numeric|min:0',
            'price_unit' => 'required|string|max:50',
            'owner_id' => 'required|exists:service_owners,id',
            'is_active' => 'boolean'
        ]);

        $validated['rating'] = 0;
        $validated['bookings_count'] = 0;

        Service::create($validated);

        return redirect()->route('admin.services.services.index')
            ->with('success', 'Layanan berhasil ditambahkan');
    }

    public function edit(Service $service)
    {
        $categories = Kategori::where('is_active', true)->get();
        $owners = ServiceOwner::where('is_active', true)->get();
        
        return view('admin.pages.services.services.edit', 
            compact('service', 'categories', 'owners'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:kategori,id',
            'description' => 'required|string',
            'duration' => 'required|string|max:100',
            'base_price' => 'required|numeric|min:0',
            'price_unit' => 'required|string|max:50',
            'owner_id' => 'required|exists:service_owners,id',
            'is_active' => 'boolean'
        ]);

        $service->update($validated);

        return redirect()->route('admin.services.services.index')
            ->with('success', 'Layanan berhasil diperbarui');
    }

    public function destroy(Service $service)
    {
        // Check if service has bookings
        if ($service->bookings()->count() > 0) {
            return back()->with('error', 'Layanan tidak dapat dihapus karena masih memiliki booking');
        }
        
        $service->delete();
        
        return redirect()->route('admin.services.services.index')
            ->with('success', 'Layanan berhasil dihapus');
    }
}