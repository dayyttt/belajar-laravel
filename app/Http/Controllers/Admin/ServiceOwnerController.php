<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceOwner;
use App\Models\Kategori;
use Illuminate\Http\Request;

class ServiceOwnerController extends Controller
{
    public function index()
    {
        $owners = ServiceOwner::with(['category', 'services.bookings'])->get();
        $categories = Kategori::all();
        
        return view('admin.pages.service-owners.index', compact('owners', 'categories'));
    }

    public function create()
    {
        $categories = Kategori::all();
        return view('admin.pages.service-owners.create', compact('categories'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand_name' => 'required|string|max:255',
            'pic_name' => 'required|string|max:255',
            'email' => 'required|email|unique:service_owners,email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'category_id' => 'nullable|exists:kategori,id',
            'service_area' => 'nullable|string',
            'commission_rate' => 'required|numeric|min:0|max:100',
            'is_active' => 'boolean',
            'join_date' => 'required|date'
        ]);

        $validated['is_verified'] = false;
        $validated['rating'] = 0;
        $validated['total_revenue'] = 0;

        ServiceOwner::create($validated);

        return redirect()->route('admin.service-owners.index')
            ->with('success', 'Service Owner berhasil ditambahkan');
    }

    public function edit(ServiceOwner $serviceOwner)
    {
        $categories = Kategori::all();
        return view('admin.pages.service-owners.edit', compact('serviceOwner', 'categories'));
    }

    public function update(Request $request, ServiceOwner $serviceOwner)
    {
        $validated = $request->validate([
            'brand_name' => 'required|string|max:255',
            'pic_name' => 'required|string|max:255',
            'email' => 'required|email|unique:service_owners,email,' . $serviceOwner->id,
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'category_id' => 'nullable|exists:kategori,id',
            'service_area' => 'nullable|string',
            'commission_rate' => 'required|numeric|min:0|max:100',
            'is_active' => 'boolean',
            'join_date' => 'required|date'
        ]);

        $serviceOwner->update($validated);

        return redirect()->route('admin.service-owners.index')
            ->with('success', 'Service Owner berhasil diperbarui');
    }

    public function destroy(ServiceOwner $serviceOwner)
    {
        // Check if owner has services
        if ($serviceOwner->services()->count() > 0) {
            return back()->with('error', 'Service Owner tidak dapat dihapus karena masih memiliki layanan');
        }

        $serviceOwner->delete();
        return redirect()->route('admin.service-owners.index')
            ->with('success', 'Service Owner berhasil dihapus');
    }
}
