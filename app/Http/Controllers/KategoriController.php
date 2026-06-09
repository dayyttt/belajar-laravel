<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Menampilkan daftar kategori.
     */
    public function index()
    {
        $categories = Kategori::withCount('services')->get();
        
        // Manually calculate bookings count for each category
        foreach ($categories as $category) {
            $category->bookings_count = $category->getBookingsCountAttribute();
        }

        return view('admin.pages.produk.kategori.index', compact('categories'));
    }

    /**
     * Menampilkan form untuk membuat kategori baru.
     */
    public function create()
    {
        return view('admin.pages.produk.kategori.create');
    }

    /**
     * Menyimpan kategori baru.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|in:home,car,smartphone,heart,book,briefcase'
        ]);

        Kategori::create($request->all());

        return redirect()
            ->route('admin.pages.produk.kategori.index')
            ->with('success', 'Kategori berhasil ditambahkan');
    }

    /**
     * Menampilkan form untuk mengedit kategori.
     */
    public function edit($id)
    {
        $category = Kategori::findOrFail($id);
        return view('admin.pages.produk.kategori.edit', compact('category'));
    }

    /**
     * Memperbarui kategori.
     */
    public function update(Request $request, $id)
    {
        $category = Kategori::findOrFail($id);

        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'icon' => 'required|string|in:home,car,smartphone,heart,book,briefcase'
        ]);

        $category->update($request->all());

        return redirect()
            ->route('admin.pages.produk.kategori.index')
            ->with('success', 'Kategori berhasil diperbarui');
    }

    /**
     * Menghapus kategori.
     */
    public function destroy($id)
    {
        $category = Kategori::findOrFail($id);
        
        // Check if category has services
        if ($category->services()->count() > 0) {
            return back()->with('error', 'Kategori tidak dapat dihapus karena masih memiliki layanan');
        }

        $category->delete();

        return redirect()
            ->route('admin.pages.produk.kategori.index')
            ->with('success', 'Kategori berhasil dihapus');
    }
}