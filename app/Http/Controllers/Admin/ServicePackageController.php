<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\ServicePackage;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ServicePackageController extends Controller
{
    public function index()
    {
        $packages = ServicePackage::with(['owner', 'services'])->latest()->get();
        return view('admin.pages.services.packages.index', compact('packages'));
    }

    public function create()
    {
        $services = Service::where('is_active', true)->get();
        $owners = User::role('service_owner')->get();
        
        return view('admin.pages.services.packages.create', compact('services', 'owners'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'services' => 'required|array|min:1',
            'services.*.id' => 'required|exists:services,id',
            'services.*.quantity' => 'required|integer|min:1',
            'services.*.discount' => 'nullable|numeric|min:0',
            'total_price' => 'required|numeric|min:0',
            'discount_amount' => 'required|numeric|min:0',
            'final_price' => 'required|numeric|min:0',
            'is_active' => 'boolean',
            'valid_until' => 'nullable|date|after:today',
            'owner_id' => 'required|exists:users,id'
        ]);

        DB::transaction(function () use ($validated) {
            $package = ServicePackage::create([
                'name' => $validated['name'],
                'description' => $validated['description'],
                'total_price' => $validated['total_price'],
                'discount_amount' => $validated['discount_amount'],
                'final_price' => $validated['final_price'],
                'is_active' => $validated['is_active'] ?? true,
                'valid_until' => $validated['valid_until'],
                'owner_id' => $validated['owner_id']
            ]);

            foreach ($validated['services'] as $service) {
                $package->services()->attach($service['id'], [
                    'quantity' => $service['quantity'],
                    'discount_amount' => $service['discount'] ?? 0
                ]);
            }
        });

        return redirect()->route('admin.services.service-packages.index')
            ->with('success', 'Paket layanan berhasil ditambahkan');
    }

    public function edit(ServicePackage $servicePackage)
    {
        $servicePackage->load('services');
        $services = Service::where('is_active', true)->get();
        $owners = User::role('service_owner')->get();
        
        return view('admin.pages.services.packages.edit', compact('servicePackage', 'services', 'owners'));
    }

    public function update(Request $request, ServicePackage $servicePackage)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'services' => 'required|array|min:1',
            'services.*.id' => 'required|exists:services,id',
            'services.*.quantity' => 'required|integer|min:1',
            'services.*.discount' => 'nullable|numeric|min:0',
            'total_price' => 'required|numeric|min:0',
            'discount_amount' => 'required|numeric|min:0',
            'final_price' => 'required|numeric|min:0',
            'is_active' => 'boolean',
            'valid_until' => 'nullable|date|after:today',
            'owner_id' => 'required|exists:users,id'
        ]);

        DB::transaction(function () use ($validated, $servicePackage) {
            $servicePackage->update([
                'name' => $validated['name'],
                'description' => $validated['description'],
                'total_price' => $validated['total_price'],
                'discount_amount' => $validated['discount_amount'],
                'final_price' => $validated['final_price'],
                'is_active' => $validated['is_active'] ?? true,
                'valid_until' => $validated['valid_until'],
                'owner_id' => $validated['owner_id']
            ]);

            $servicePackage->services()->detach();
            foreach ($validated['services'] as $service) {
                $servicePackage->services()->attach($service['id'], [
                    'quantity' => $service['quantity'],
                    'discount_amount' => $service['discount'] ?? 0
                ]);
            }
        });

        return redirect()->route('admin.services.service-packages.index')
            ->with('success', 'Paket layanan berhasil diperbarui');
    }

    public function destroy(ServicePackage $servicePackage)
    {
        $servicePackage->services()->detach();
        $servicePackage->delete();
        
        return redirect()->route('admin.services.service-packages.index')
            ->with('success', 'Paket layanan berhasil dihapus');
    }

    public function getService(Service $service)
    {
        return response()->json([
            'id' => $service->id,
            'name' => $service->name,
            'base_price' => $service->base_price,
            'duration' => $service->duration,
            'price_unit' => $service->price_unit
        ]);
    }
}