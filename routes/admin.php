<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ProductController;

Route::prefix('admin')
    ->group(function () {
        Route::get('/login', [AuthController::class, 'showLogin'])
            ->name('login');
        Route::post('/login', [AuthController::class, 'login'])
            ->name('admin.login.submit');

        Route::name('admin.')
            ->middleware('auth')
            ->group(function () {
                // ダッシュボード
                Route::get('/dashboard', [DashboardController::class, 'index'])
                    ->name('dashboard');
                // 商品一覧画面
                Route::view('/products', 'admin.products.index')
                    ->name('products.index');
                // 商品登録画面
                Route::get('/products/create', [ProductController::class, 'create'])
                    ->name('products.create');
                Route::post('/products', [ProductController::class, 'store'])
                    ->name('products.store');
                // 注文管理画面
                Route::view('/orders', 'admin.orders.index')
                    ->name('orders.index');
                Route::view('/orders/{order}', 'admin.orders.show')
                    ->name('orders.show');
                // 顧客管理画面
                Route::view('/customers', 'admin.customers.index')
                    ->name('customers.index');
                // カテゴリー管理画面
                Route::get('/categories', [CategoryController::class, 'create'])
                    ->name('categories.create');
                Route::post('/categores', [CategoryController::class, 'store'])
                    ->name('categories.store');
                // 設定画面
                Route::view('/settings', 'admin.settings.index')
                    ->name('settings.index');
            });
    });
