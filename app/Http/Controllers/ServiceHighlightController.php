<?php

namespace App\Http\Controllers;

use App\Models\ServiceHighlight;
use Illuminate\Http\Request;

class ServiceHighlightController extends Controller
{
    public function index()
    {
        $highlights = ServiceHighlight::orderBy('order')->get();
        return view('admin.pages.content.highlights.index', compact('highlights'));
    }

    public function create()
    {
        return view('admin.pages.content.highlights.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:50',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');

        ServiceHighlight::create($validated);

        return redirect()->route('admin.content.highlights.index')
            ->with('success', 'Highlight layanan berhasil ditambahkan');
    }

    public function show(ServiceHighlight $highlight)
    {
        return view('admin.pages.content.highlights.show', compact('highlight'));
    }

    public function edit(ServiceHighlight $highlight)
    {
        return view('admin.pages.content.highlights.edit', compact('highlight'));
    }

    public function update(Request $request, ServiceHighlight $highlight)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'icon' => 'nullable|string|max:50',
            'is_featured' => 'boolean',
            'is_active' => 'boolean',
            'order' => 'integer|min:0',
        ]);

        $validated['is_featured'] = $request->has('is_featured');
        $validated['is_active'] = $request->has('is_active');

        $highlight->update($validated);

        return redirect()->route('admin.content.highlights.index')
            ->with('success', 'Highlight layanan berhasil diperbarui');
    }

    public function destroy(ServiceHighlight $highlight)
    {
        $highlight->delete();
        return redirect()->route('admin.content.highlights.index')
            ->with('success', 'Highlight layanan berhasil dihapus');
    }
}