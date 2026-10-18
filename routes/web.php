<?php

use App\Http\Controllers\EcommerceController;
use Illuminate\Support\Facades\Route;

// web dinamis
Route::get('/', [EcommerceController::class, 'home'])->name('home');
Route::get('/produk', [EcommerceController::class, 'index'])->name('products.index');
Route::get('/produk/{id}', [EcommerceController::class, 'show'])->name('products.show');

// web statis
Route::view('/about', 'page.about')->name('about');
Route::view('/contact', 'page.contact')->name('contact');