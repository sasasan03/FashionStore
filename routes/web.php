<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

// Top page (product list)
Route::get('/', [HomeController::class, 'index'])->name('home');

// Product detail (route model binding by slug)
Route::get('/customer/products/{product:slug}', [HomeController::class, 'show'])->name('customer.products.show');
