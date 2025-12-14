<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceOwner;
use Illuminate\Http\Request;

class ServiceOwnerController extends Controller
{
    public function index()
    {
        $owners = ServiceOwner::latest()->get();
        return view('admin.pages.service-owners.index', compact('owners'));
    }

    public function create()
    {
        return view('admin.pages.service-owners.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'brand_name' => 'required|string|max:255',
            'pic_name' => 'required|string|max:255',
            'email' => 'required|email|unique:service_owners,email',
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'service_area' => 'nullable|string',
            'commission_rate' => 'required|numeric|min:0|max:100',
            'is_active' => 'boolean',
            'join_date' => 'required|date'
        ]);

        ServiceOwner::create($validated);

        return redirect()->route('admin.service-owners.index')
            ->with('success', 'Data pemilik jasa berhasil ditambahkan');
    }

    public function edit(ServiceOwner $serviceOwner)
    {
        return view('admin.pages.service-owners.edit', compact('serviceOwner'));
    }

    public function update(Request $request, ServiceOwner $serviceOwner)
    {
        $validated = $request->validate([
            'brand_name' => 'required|string|max:255',
            'pic_name' => 'required|string|max:255',
            'email' => 'required|email|unique:service_owners,email,' . $serviceOwner->id,
            'phone' => 'required|string|max:20',
            'address' => 'required|string',
            'service_area' => 'nullable|string',
            'commission_rate' => 'required|numeric|min:0|max:100',
            'is_active' => 'boolean',
            'join_date' => 'required|date'
        ]);

        $serviceOwner->update($validated);

        return redirect()->route('admin.service-owners.index')
            ->with('success', 'Data pemilik jasa berhasil diperbarui');
    }

    public function destroy(ServiceOwner $serviceOwner)
    {
        $serviceOwner->delete();
        return redirect()->route('admin.service-owners.index')
            ->with('success', 'Data pemilik jasa berhasil dihapus');
    }
}
