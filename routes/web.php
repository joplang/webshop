<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('customers', \App\Http\Controllers\CustomerController::class);

Route::resource('products', \App\Http\Controllers\ProductController::class);

Route::resource('genres', \App\Http\Controllers\GenreController::class);

Route::resource('labels', \App\Http\Controllers\LabelController::class);

Route::resource('cart', \App\Http\Controllers\CartController::class);

Route::resource('artists', \App\Http\Controllers\ArtistController::class);


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

