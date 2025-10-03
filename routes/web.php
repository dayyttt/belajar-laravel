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

Route::get('/about', [AboutController::class, 'index']);

Route::get('/product', [ProductController::class, 'index']);


Route::get('/contact', [ContactController::class, 'index']);
Route::get('/service', [ServiceController::class, 'index']);
