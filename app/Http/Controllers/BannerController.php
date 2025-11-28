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

    // Add edit, update, and destroy methods as needed
}