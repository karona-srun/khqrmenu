<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('setup-store', StoreController::class);
Route::resource('category', CategoryController::class);
Route::resource('products', ProductController::class);
Route::resource('users', UserController::class);

Route::get('/{slug?}', [WelcomeController::class, 'index'])
     ->where('slug', '^(?!login|register|password).*$')
     ->name('welcome.index');
