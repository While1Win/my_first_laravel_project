<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartControlle;
use App\Http\Controllers\ProductController;

Route::get('/', [HomeController::class, 'index']);


Route::get('/product', [ProductController::class, 'index']);

Route::get('/product/{id}', [ProductController::class, 'show']);

Route::get('/cart', [CartControlle::class, 'index']);

