<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Kategori; // Pastikan model Employee sudah dibuat (lihat catatan di bawah)
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    /**
     * Menampilkan daftar data.
     */
    public function index()
    {
        $kategori = Kategori::all(); 

        return view('admin.pages.produk.kategori.index', compact('kategori'));
    }

    
}