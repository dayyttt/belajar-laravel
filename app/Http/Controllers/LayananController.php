<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Layanan;
use App\Models\KategoriLayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class LayananController extends Controller
{
    public function index()
    {
        $layanan = Layanan::with('kategori')
            ->latest()
            ->paginate(10);
            
        $kategori = KategoriLayanan::where('is_active', true)->get();
            
        return view('admin.pages.produk.layanan.index', compact('layanan', 'kategori'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'durasi' => 'required|integer|min:1',
            'kategori_id' => 'required|exists:kategori_layanan,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_active' => 'boolean',
            'fitur' => 'nullable|array',
            'fitur.*' => 'string|max:255'
        ]);

        if ($request->hasFile('gambar')) {
            $validated['gambar'] = $request->file('gambar')->store('layanan', 'public');
        }

        $validated['slug'] = Str::slug($request->nama);
        $validated['is_active'] = $request->has('is_active');
        $validated['fitur'] = $request->fitur ? json_encode($request->fitur) : null;

        Layanan::create($validated);

        return redirect()->route('admin.pages.produk.layanan.index')
            ->with('success', 'Layanan berhasil dibuat!');
    }

    public function update(Request $request, Layanan $layanan)
    {
        $validated = $request->validate([
            'nama' => 'required|string|max:255',
            'deskripsi' => 'required|string',
            'harga' => 'required|numeric|min:0',
            'durasi' => 'required|integer|min:1',
            'kategori_id' => 'required|exists:kategori_layanan,id',
            'gambar' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'is_active' => 'boolean',
            'fitur' => 'nullable|array',
            'fitur.*' => 'string|max:255'
        ]);

        if ($request->hasFile('gambar')) {
            if ($layanan->gambar) {
                Storage::disk('public')->delete($layanan->gambar);
            }
            $validated['gambar'] = $request->file('gambar')->store('layanan', 'public');
        }

        if ($request->has('remove_gambar')) {
            if ($layanan->gambar) {
                Storage::disk('public')->delete($layanan->gambar);
                $validated['gambar'] = null;
            }
        }

        $validated['slug'] = Str::slug($request->nama);
        $validated['is_active'] = $request->has('is_active');
        $validated['fitur'] = $request->fitur ? json_encode($request->fitur) : null;

        $layanan->update($validated);

        return redirect()->route('admin.pages.produk.layanan.index')
            ->with('success', 'Layanan berhasil diperbarui!');
    }

    public function destroy(Layanan $layanan)
    {
        if ($layanan->gambar) {
            Storage::disk('public')->delete($layanan->gambar);
        }

        $layanan->delete();

        return redirect()->route('admin.pages.produk.layanan.index')
            ->with('success', 'Layanan berhasil dihapus!');
    }

    public function toggleStatus(Layanan $layanan)
    {
        $layanan->update([
            'is_active' => !$layanan->is_active
        ]);

        $status = $layanan->is_active ? 'diaktifkan' : 'dinonaktifkan';

        return back()->with('success', "Layanan berhasil $status!");
    }
}