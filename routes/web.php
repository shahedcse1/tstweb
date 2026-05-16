<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\QualityController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\ContactController;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/products', [ProductController::class, 'index'])->name('products');
Route::get('/products/sugar', [ProductController::class, 'sugar'])->name('products.sugar');
Route::get('/products/edible-oils', [ProductController::class, 'oils'])->name('products.oils');
Route::get('/products/lentils', [ProductController::class, 'lentils'])->name('products.lentils');
Route::get('/products/salt', [ProductController::class, 'salt'])->name('products.salt');
Route::get('/products/construction', [ProductController::class, 'construction'])->name('products.construction');
Route::get('/quality', [QualityController::class, 'index'])->name('quality');
Route::get('/partnership', [PartnershipController::class, 'index'])->name('partnership');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::post('/contact', [ContactController::class, 'submit'])->name('contact.submit');
