<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SalesController;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::prefix('category')->group(function () {

    Route::get('/food-beverage', [ProductController::class, 'food'])->name('food');
    Route::get('/beauty-health', [ProductController::class, 'beauty'])->name('beauty');
    Route::get('/home-care', [ProductController::class, 'homecare'])->name('homecare');
    Route::get('/baby-kid', [ProductController::class, 'baby'])->name('baby');

});

Route::get('/user/{id}/name/{name}', [UserController::class, 'profile'])->name('user');

Route::get('/sales/{name}', [SalesController::class, 'index'])->name('sales');
