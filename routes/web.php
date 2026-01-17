<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index']);
Route::get('/products/{product:slug}', [HomeController::class, 'show'])->name('products.show');
