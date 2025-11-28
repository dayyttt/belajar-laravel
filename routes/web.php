<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Session;




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


Route::get('/dashboard', function () {
    return view ('admin.pages.dashboard.index');
})->name('dashboard.index');

//majemen
Route::get('/artikel', [ArtikelController::class, 'index'])->name('admin.pages.manajemen.artikel.index');
Route::get('/artikel/create', [ArtikelController::class, 'create'])->name('admin.pages.manajemen.artikel.create');
Route::get('/artikel/store', [ArtikelController::class, 'store'])->name('admin.pages.manajemen.artikel.store');
Route::get('/artikel/update', [ArtikelController::class, 'update'])->name('admin.pages.manajemen.artikel.update');
Route::get('/artikel/destroy', [ArtikelController::class, 'destroy'])->name('admin.pages.manajemen.artikel.destroy');
Route::get('/artikel/bulk-destroy', [ArtikelController::class, 'bulkDestroy'])->name('admin.pages.manajemen.artikel.bulk-destroy');
Route::get('/halaman', [HalamanController::class, 'index'])->name('admin.manajemen.halaman.index');
Route::get('/halaman/create', [HalamanController::class, 'create'])->name('admin.manajemen.halaman.create');
Route::get('/halaman/store', [HalamanController::class, 'store'])->name('admin.manajemen.halaman.store');
Route::get('/halaman/update', [HalamanController::class, 'update'])->name('admin.manajemen.halaman.update');
Route::get('/halaman/destroy', [HalamanController::class, 'destroy'])->name('admin.manajemen.halaman.destroy');
Route::get('/media', [MediaController::class, 'index'])->name('admin.manajemen.media.index');
Route::get('/media/create', [MediaController::class, 'create'])->name('admin.manajemen.media.create');
Route::get('/media/store', [MediaController::class, 'store'])->name('admin.manajemen.media.store');
Route::get('/media/update', [MediaController::class, 'update'])->name('admin.manajemen.media.update');
Route::get('/media/destroy', [MediaController::class, 'destroy'])->name('admin.manajemen.media.destroy');
Route::get('/media/bulk-destroy', [MediaController::class, 'bulkDestroy'])->name('admin.manajemen.media.bulk-destroy');

//produk
Route::resource('produk.layanan', LayananController::class)->names([
    'index' => 'admin.pages.produk.layanan.index',
    'create' => 'admin.pages.produk.layanan.create',
    'store' => 'admin.pages.produk.layanan.store',
    'show' => 'admin.pages.produk.layanan.show',
    'edit' => 'admin.pages.produk.layanan.edit',
    'update' => 'admin.pages.produk.layanan.update',
    'destroy' => 'admin.pages.produk.layanan.destroy',
]);
//form auth
Route::get('/login', function () {
    return view ('admin.auth.login.index');
})->name('login.index');

Route::get('/logout', function () {
    return view ('admin.auth.logout.index');
})->name('logout.index');

