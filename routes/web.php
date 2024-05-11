<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductsController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/signin', [UserController::class, 'signin'])->name('user-sigin');
Route::post('/signin-form', [UserController::class, 'signinFormSubmit'])->name('user-sigin-submit');
Route::get('/dashboard', [UserController::class, 'dashboard'])->name('dashboard');
Route::get('/products', [ProductsController::class, 'index'])->name('products');
Route::get('/product-store', [ProductsController::class, 'store'])->name('product-store');
Route::get('/category', [CategoryController::class, 'index'])->name('category');
Route::post('/category-store', [CategoryController::class, 'store'])->name('category-store');
