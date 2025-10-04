<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ServiceController;








Route::get('/', [HomeController::class, 'index']);
Route::get('/company/create', [HomeController::class, 'create']);
Route::post('/company/store', [HomeController::class, 'store']);

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
    return view ('landing.contacts.index');
})->name('contacts.index');



Route::get('/about', [AboutController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);


Route::get('/contact', [ContactController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);
