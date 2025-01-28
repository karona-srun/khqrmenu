<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StoreController;
use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

// Route::get('/{any}', function () {
//     return view('welcome'); // Replace 'app' with the name of your Vue app view.
// })->where('any', '.*');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('setup-store', StoreController::class);
Route::resource('category', CategoryController::class);
Route::resource('products', ProductController::class);

Route::get('/{slug?}', [WelcomeController::class, 'index'])->name('welcome.index');
