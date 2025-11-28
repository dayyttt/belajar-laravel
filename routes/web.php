<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\MediaController;
use App\Http\Controllers\LayananController;
use App\Http\Controllers\KategoriController;
use App\Http\Controllers\Auth\LoginController;




Route::get('/', [HomeController::class, 'index']);
Route::get('/company/create', [HomeController::class, 'create']);
Route::post('/company/store', [HomeController::class, 'store']);

Route::get('/about', [AboutController::class, 'index'])->name('about.index');

Route::get('/features', function () {
    return view ('landing.features.index');
})->name('features.index');

Route::get('/screenshots', function () {
    return view ('landing.screenshots.index');
})->name('screenshots.index');

Route::get('/testimoni', function () {
    return view ('landing.testimoni.index');
})->name('testimoni.index');

Route::get('/plans', function () {
    return view ('landing.plans.index');
})->name('plans.index');

Route::get('/downloads', function () {
    return view ('landing.downloads.index');
})->name('downloads.index');

Route::get('/contacts', function () {
    return view ('contact');
})->name('contacts.index');


// Language Switch Routes
Route::get('/language/{locale}', [LanguageController::class, 'switch'])->name('language.switch');

Route::get('/product', [ProductController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);


// Authentication Routes
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});

// Protected Admin Routes
Route::middleware('auth')->group(function () {
    // Logout
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
    
    Route::get('/dashboard', function () {
        return view('admin.pages.dashboard.index');
    })->name('dashboard.index');

    //majemen
    Route::get('/artikel', [ArtikelController::class, 'index'])->name('admin.pages.manajemen.artikel.index');
    Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('admin.pages.manajemen.artikel.create');
    Route::post('/artikel/store', [ArtikelController::class, 'store'])->name('admin.pages.manajemen.artikel.store');
    Route::put('/artikel/update', [ArtikelController::class, 'update'])->name('admin.pages.manajemen.artikel.update');
    Route::delete('/artikel/destroy', [ArtikelController::class, 'destroy'])->name('admin.pages.manajemen.artikel.destroy');
    Route::post('/artikel/bulk-destroy', [ArtikelController::class, 'bulkDestroy'])->name('admin.pages.manajemen.artikel.bulk-destroy');
    
    Route::get('/halaman', [HalamanController::class, 'index'])->name('admin.pages.manajemen.halaman.index');
    Route::get('/halaman/create', [HalamanController::class, 'create'])->name('admin.pages.manajemen.halaman.create');
    Route::post('/halaman/store', [HalamanController::class, 'store'])->name('admin.pages.manajemen.halaman.store');
    Route::put('/halaman/update', [HalamanController::class, 'update'])->name('admin.pages.manajemen.halaman.update');
    Route::delete('/halaman/destroy', [HalamanController::class, 'destroy'])->name('admin.pages.manajemen.halaman.destroy');
    
    Route::get('/media', [MediaController::class, 'index'])->name('admin.pages.manajemen.media.index');
    Route::get('/media/create', [MediaController::class, 'create'])->name('admin.pages.manajemen.media.create');
    Route::post('/media/store', [MediaController::class, 'store'])->name('admin.pages.manajemen.media.store');
    Route::put('/media/update', [MediaController::class, 'update'])->name('admin.pages.manajemen.media.update');
    Route::delete('/media/destroy', [MediaController::class, 'destroy'])->name('admin.pages.manajemen.media.destroy');
    Route::post('/media/bulk-destroy', [MediaController::class, 'bulkDestroy'])->name('admin.pages.manajemen.media.bulk-destroy');

    //produk
    Route::resource('layanan', LayananController::class)->names([
        'index' => 'admin.pages.produk.layanan.index',
        'create' => 'admin.pages.produk.layanan.create',
        'store' => 'admin.pages.produk.layanan.store',
        'show' => 'admin.pages.produk.layanan.show',
        'edit' => 'admin.pages.produk.layanan.edit',
        'update' => 'admin.pages.produk.layanan.update',
        'destroy' => 'admin.pages.produk.layanan.destroy',
    ]);
    
    Route::resource('kategori', KategoriController::class)->names([
        'index' => 'admin.pages.produk.kategori.index',
        'create' => 'admin.pages.produk.kategori.create',
        'store' => 'admin.pages.produk.kategori.store',
        'show' => 'admin.pages.produk.kategori.show',
        'edit' => 'admin.pages.produk.kategori.edit',
        'update' => 'admin.pages.produk.kategori.update',
        'destroy' => 'admin.pages.produk.kategori.destroy',
    ]);
});

