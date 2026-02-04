<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/customer/products/{product:slug}', [HomeController::class, 'show'])->name('customer.products.show');
