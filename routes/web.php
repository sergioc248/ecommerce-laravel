<?php

use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('products')->controller(ProductController::class)->group(function () {

    Route::get('/');

    Route::get('/create');

    Route::get('/{id}/{category?}');
});
