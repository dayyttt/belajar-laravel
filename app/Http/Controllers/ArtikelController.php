<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Artikel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class ArtikelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $artikel = Artikel::with('user')
            ->latest()
            ->paginate(10);
            
        return view('admin.pages.manajemen.artikel.index', compact('artikel'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.pages.manajemen.artikel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'status' => 'required|in:draft,published',
            'excerpt' => 'nullable|string|max:500'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('artikel', 'public');
        }

        // Generate slug
        $validated['slug'] = $this->generateUniqueSlug($request->title);
        $validated['user_id'] = auth()->id();

        Artikel::create($validated);

        return redirect()->route('admin.pages.manajemen.artikel.index')
            ->with('success', 'Artikel berhasil dibuat!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Artikel $artikel)
    {
        return view('admin.pages.manajemen.artikel.edit', compact('artikel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Artikel $artikel)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'status' => 'required|in:draft,published',
            'excerpt' => 'nullable|string|max:500'
        ]);

        // Handle image upload
        if ($request->hasFile('image')) {
            // Delete old image
            if ($artikel->image) {
                Storage::disk('public')->delete($artikel->image);
            }
            $validated['image'] = $request->file('image')->store('artikel', 'public');
        }

        // Generate new slug if title changed
        if ($artikel->title !== $request->title) {
            $validated['slug'] = $this->generateUniqueSlug($request->title);
        }

        $artikel->update($validated);

        return redirect()->route('admin.pages.manajemen.artikel.index')
            ->with('success', 'Artikel berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Artikel $artikel)
    {
        // Delete image if exists
        if ($artikel->image) {
            Storage::disk('public')->delete($artikel->image);
        }

        $artikel->delete();

        return redirect()->route('admin.pages.manajemen.artikel.index')
            ->with('success', 'Artikel berhasil dihapus!');
    }

    /**
     * Toggle artikel status
     */
    public function toggleStatus(Artikel $artikel)
    {
        $artikel->update([
            'status' => $artikel->status === 'published' ? 'draft' : 'published'
        ]);

        $status = $artikel->status === 'published' ? 'dipublikasikan' : 'disimpan sebagai draft';

        return back()->with('success', "Artikel berhasil $status!");
    }

    /**
     * Generate unique slug
     */
    private function generateUniqueSlug($title)
    {
        $slug = Str::slug($title);
        $originalSlug = $slug;
        $count = 1;

        while (Artikel::where('slug', $slug)->exists()) {
            $slug = $originalSlug . '-' . $count++;
        }

        return $slug;
    }
}