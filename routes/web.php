<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [\App\Http\Controllers\ProductController::class, 'index'])
    ->name('products.index');

Route::post('/', [\App\Http\Controllers\CartController::class, 'store'])
    ->name('cart.store');

Route::get('index2', [\App\Http\Controllers\ProductController::class, 'indexWithLivewire'])
    ->name('products.indexWithLivewire');

Route::delete('/', [\App\Http\Controllers\CartController::class, 'delete'])
    ->name('cart.delete');   

