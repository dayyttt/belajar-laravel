<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Halaman;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class HalamanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $halaman = Halaman::with('user')
            ->latest()
            ->paginate(10);
            
        return view('admin.pages.manajemen.halaman.index', compact('halaman'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'slug' => 'required|string|max:255|unique:pages,slug',
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'status' => 'required|in:draft,published',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            $validated['featured_image'] = $request->file('featured_image')->store('pages', 'public');
        }

        $validated['user_id'] = auth()->id();

        Halaman::create($validated);

        return redirect()->route('admin.pages.manajemen.halaman.index')
            ->with('success', 'Halaman berhasil dibuat!');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Halaman $halaman)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'slug' => 'required|string|max:255|unique:pages,slug,' . $halaman->id,
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string|max:500',
            'status' => 'required|in:draft,published',
            'featured_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048'
        ]);

        // Handle featured image upload
        if ($request->hasFile('featured_image')) {
            // Delete old image
            if ($halaman->featured_image) {
                Storage::disk('public')->delete($halaman->featured_image);
            }
            $validated['featured_image'] = $request->file('featured_image')->store('pages', 'public');
        }

        // Handle image removal
        if ($request->has('remove_featured_image')) {
            if ($halaman->featured_image) {
                Storage::disk('public')->delete($halaman->featured_image);
                $validated['featured_image'] = null;
            }
        }

        $halaman->update($validated);

        return redirect()->route('admin.pages.manajemen.halaman.index')
            ->with('success', 'Halaman berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Halaman $halaman)
    {
        // Delete featured image if exists
        if ($halaman->featured_image) {
            Storage::disk('public')->delete($halaman->featured_image);
        }

        $halaman->delete();

        return redirect()->route('admin.pages.manajemen.halaman.index')
            ->with('success', 'Halaman berhasil dihapus!');
    }

    /**
     * Toggle page status
     */
    public function toggleStatus(Halaman $halaman)
    {
        $halaman->update([
            'status' => $halaman->status === 'published' ? 'draft' : 'published'
        ]);

        $status = $halaman->status === 'published' ? 'dipublikasikan' : 'disimpan sebagai draft';

        return back()->with('success', "Halaman berhasil $status!");
    }
}