<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServiceCategory;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ServiceController extends Controller
{
    public function index()
    {
        $services = Service::with(['category', 'owner'])->latest()->get();
        return view('admin.pages.services.services.index', compact('services'));
    }

    public function create()
    {
        $categories = ServiceCategory::where('is_active', true)->get();
        $owners = User::role('service_owner')->get();
        $priceUnits = Service::PRICE_UNITS;
        
        return view('admin.pages.services.services.create', compact('categories', 'owners', 'priceUnits'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:service_categories,id',
            'description' => 'nullable|string',
            'duration' => 'required|integer|min:1',
            'base_price' => 'required|numeric|min:0',
            'price_unit' => 'required|in:session,hour,day',
            'is_active' => 'boolean',
            'display_order' => 'integer|min:0',
            'owner_id' => 'required|exists:users,id',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            $validated['image_path'] = $request->file('image')->store('services', 'public');
        }

        Service::create($validated);

        return redirect()->route('admin.services.services.index')
            ->with('success', 'Layanan berhasil ditambahkan');
    }

    public function edit(Service $service)
    {
        $categories = ServiceCategory::where('is_active', true)->get();
        $owners = User::role('service_owner')->get();
        $priceUnits = Service::PRICE_UNITS;
        
        return view('admin.pages.services.services.edit', 
            compact('service', 'categories', 'owners', 'priceUnits'));
    }

    public function update(Request $request, Service $service)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'category_id' => 'required|exists:service_categories,id',
            'description' => 'nullable|string',
            'duration' => 'required|integer|min:1',
            'base_price' => 'required|numeric|min:0',
            'price_unit' => 'required|in:session,hour,day',
            'is_active' => 'boolean',
            'display_order' => 'integer|min:0',
            'owner_id' => 'required|exists:users,id',
            'image' => 'nullable|image|max:2048'
        ]);

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($service->image_path) {
                Storage::disk('public')->delete($service->image_path);
            }
            $validated['image_path'] = $request->file('image')->store('services', 'public');
        }

        $service->update($validated);

        return redirect()->route('admin.services.services.index')
            ->with('success', 'Layanan berhasil diperbarui');
    }

    public function destroy(Service $service)
    {
        if ($service->image_path) {
            Storage::disk('public')->delete($service->image_path);
        }
        
        $service->delete();
        
        return redirect()->route('admin.services.services.index')
            ->with('success', 'Layanan berhasil dihapus');
    }
}