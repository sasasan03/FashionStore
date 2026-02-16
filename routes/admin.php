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

                Route::view('/products', 'admin.products.index')
                    ->name('products.index');
                Route::view('/products/create', 'admin.products.create')
                    ->name('products.create');

                Route::view('/orders', 'admin.orders.index')
                    ->name('orders.index');
                Route::view('/orders/{order}', 'admin.orders.show')
                    ->name('orders.show');

                Route::view('/customers', 'admin.customers.index')
                    ->name('customers.index');
                Route::view('/categories', 'admin.categories.index')
                    ->name('categories.index');
                Route::view('/analytics', 'admin.analytics.index')
                    ->name('analytics.index');
                Route::view('/settings', 'admin.settings.index')
                    ->name('settings.index');
            });
    });
