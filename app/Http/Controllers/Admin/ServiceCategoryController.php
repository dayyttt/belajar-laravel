<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function index()
    {
        $categories = ServiceCategory::orderBy('display_order')->get();
        return view('admin.pages.services.categories.index', compact('categories'));
    }

    public function create()
    {
        return view('admin.pages.services.categories.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'display_order' => 'integer|min:0'
        ]);

        ServiceCategory::create($validated);

        return redirect()->route('admin.services.service-categories.index')
            ->with('success', 'Kategori berhasil ditambahkan');
    }

    public function edit(ServiceCategory $serviceCategory)
    {
        return view('admin.pages.services.categories.edit', compact('serviceCategory'));
    }

    public function update(Request $request, ServiceCategory $serviceCategory)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
            'display_order' => 'integer|min:0'
        ]);

        $serviceCategory->update($validated);

        return redirect()->route('admin.services.service-categories.index')
            ->with('success', 'Kategori berhasil diperbarui');
    }

    public function destroy(ServiceCategory $serviceCategory)
    {
        if ($serviceCategory->services()->exists()) {
            return back()->with('error', 'Tidak dapat menghapus kategori yang memiliki layanan terkait');
        }

        $serviceCategory->delete();
        return redirect()->route('admin.services.service-categories.index')
            ->with('success', 'Kategori berhasil dihapus');
    }

    public function reorder(Request $request)
    {
        $items = $request->input('items');
        
        foreach ($items as $index => $id) {
            ServiceCategory::where('id', $id)->update([
                'display_order' => $index + 1
            ]);
        }

        return response()->json(['success' => true]);
    }
}
