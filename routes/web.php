<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::prefix('products')->controller(ProductController::class)->group(function () {

    Route::get('', 'index');

    Route::get('/{id}/{category?}', 'show');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/', [HomeController::class, 'welcome']);

Route::prefix('admin')->group(function () {
    // Admin Dashboard
    Route::get('/', [AdminController::class, 'index'])->name('admin.index');
    Route::get('/category/create', [CategoryController::class, 'create'])->name(
        'admin.category.create'
    );
    Route::post('/categories/store', [CategoryController::class, 'store'])->name(
        'admin.categories.store'
    );

    Route::get('/products/create', [ProductController::class, 'create'])->name(
        'admin.products.create'
    );
    Route::post('/products/store', [ProductController::class, 'store'])->name(
        'admin.products.store'
    );
    Route::get('products', [ProductController::class, 'table'])->name(
        'admin.products.table'
    );
});
