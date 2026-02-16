<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;

Route::prefix('admin')
    ->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])
            ->name('login');
        Route::post('/login', [AuthController::class, 'login'])
            ->name('admin.login.submit');

        Route::name('admin.')
            ->middleware('auth')
            ->group(function () {
                Route::get('/', [DashboardController::class, 'index'])
                    ->name('dashboard');

                Route::view('/products/create', 'admin.products.create')
                    ->name('products.create');
            });
    });
