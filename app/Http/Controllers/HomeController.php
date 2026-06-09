<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller
{
    public function index()
    {
        // Graceful fallback jika MySQL belum jalan
        try {
            $data['company'] = DB::table('company')->first();
        } catch (\Exception $e) {
            Log::warning('HomeController: DB tidak tersedia — ' . $e->getMessage());
            $data['company'] = null;
        }

        $data['services'] = [
            ['slug' => 'lokasi-terdekat', 'img' => 'layanan-1.jpg', 'title' => 'Lokasi Terdekat', 'desc' => 'Temukan layanan dan tempat terdekat dengan mudah dan cepat.'],
            ['slug' => 'rumah-tangga',    'img' => 'layanan-2.jpg', 'title' => 'Rumah Tangga',    'desc' => 'Solusi lengkap untuk kebutuhan rumah tangga dan perawatan hunian.'],
            ['slug' => 'elektronik',      'img' => 'layanan-3.jpg', 'title' => 'Elektronik',      'desc' => 'Produk dan layanan elektronik terbaru dan terpercaya.'],
            ['slug' => 'kendaraan',       'img' => 'layanan-4.jpg', 'title' => 'Kendaraan',       'desc' => 'Layanan perawatan, rental, dan informasi kendaraan.'],
            ['slug' => 'kesehatan',       'img' => 'layanan-5.jpg', 'title' => 'Kesehatan',       'desc' => 'Informasi dan layanan kesehatan terpercaya untuk keluarga.'],
            ['slug' => 'pendidikan',      'img' => 'layanan-6.jpg', 'title' => 'Pendidikan',      'desc' => 'Platform pembelajaran dan pengembangan skill terbaik.'],
            ['slug' => 'bisnis-it',       'img' => 'layanan-7.jpg', 'title' => 'Bisnis & IT',     'desc' => 'Solusi bisnis dan teknologi untuk pertumbuhan perusahaan.'],
            ['slug' => 'lainnya',         'img' => 'layanan-8.jpg', 'title' => 'Lainnya',         'desc' => 'Berbagai layanan tambahan untuk kebutuhan spesifik Anda.'],
        ];

        $data['testimonials'] = [
            ['initials' => 'JS', 'name' => 'Joko Susilo',  'role' => 'Pengusaha',        'color' => 'from-green-400 to-teal-500',    'quote' => 'TokiToki sangat membantu bisnis saya. Layanannya cepat, aman, dan terpercaya. Saya sangat merekomendasikan platform ini untuk semua kebutuhan.'],
            ['initials' => 'AW', 'name' => 'Ani Wijaya',   'role' => 'Ibu Rumah Tangga', 'color' => 'from-emerald-400 to-green-600', 'quote' => 'Aplikasi yang luar biasa! Saya bisa menemukan mitra jasa terpercaya dalam hitungan menit. Proses booking dan pembayaran sangat mudah.'],
            ['initials' => 'BS', 'name' => 'Budi Santoso', 'role' => 'Karyawan Swasta',  'color' => 'from-teal-400 to-emerald-500',  'quote' => 'Pelayanan 24/7 yang responsif membuat saya merasa aman. TokiToki benar-benar solusi satu atap untuk semua kebutuhan saya.'],
        ];

        return view('home', $data);
    }

    public function create()
    {
        return view('company.create');
    }

    public function store(Request $request)
    {
        DB::table('company')->insert([
            'name'       => $request->name,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'address'    => $request->address,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        return redirect('/')->with('success', 'Form berhasil dibuat.');
    }
}
