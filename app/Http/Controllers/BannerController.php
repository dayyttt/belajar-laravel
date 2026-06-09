<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BannerController extends Controller
{
    public function index()
    {
        $banners = Banner::orderBy('order')->get();
        return view('admin.pages.content.banners.index', compact('banners'));
    }

    public function create()
    {
        return view('admin.pages.content.banners.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'required|image|max:2048',
            'order' => 'nullable|integer',
            'is_active' => 'boolean',
            'button_text' => 'nullable|string|max:50',
            'button_url' => 'nullable|url',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('banners', 'public');
        }

        Banner::create($validated);

        return redirect()->route('admin.content.banners.index')
            ->with('success', 'Banner created successfully');
    }

    public function show(Banner $banner)
    {
        return view('admin.pages.content.banners.show', compact('banner'));
    }

    public function edit(Banner $banner)
    {
        return view('admin.pages.content.banners.edit', compact('banner'));
    }

    public function update(Request $request, Banner $banner)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'order' => 'nullable|integer',
            'is_active' => 'boolean',
            'button_text' => 'nullable|string|max:50',
            'button_url' => 'nullable|url',
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($banner->image && Storage::disk('public')->exists($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }
            
            $validated['image'] = $request->file('image')->store('banners', 'public');
        }

        $banner->update($validated);

        return redirect()->route('admin.content.banners.index')
            ->with('success', 'Banner updated successfully');
    }

    public function destroy(Banner $banner)
    {
        try {
            // Delete image file if exists
            if ($banner->image && Storage::disk('public')->exists($banner->image)) {
                Storage::disk('public')->delete($banner->image);
            }

            $banner->delete();

            return redirect()->route('admin.content.banners.index')
                ->with('success', 'Banner deleted successfully');
        } catch (\Exception $e) {
            return redirect()->route('admin.content.banners.index')
                ->with('error', 'Failed to delete banner: ' . $e->getMessage());
        }
    }
}