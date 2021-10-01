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

Route::get('/', [\App\Http\Controllers\HomeController::class, 'index']);
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index']);


Route::get('/search/', [\App\Http\Controllers\HomeController::class, 'search'])->name('search');
Route::get('/profile', [\App\Http\Controllers\CustomerController::class, 'show'])->middleware('auth');


Route::post('/add-tocart', [\App\Http\Controllers\CartController::class, 'addToCart'])->name('add-tocart');
Route::post('/remove-fromcart', [\App\Http\Controllers\CartController::class, 'removeFromCart'])->name('remove-fromcart');

Route::resource('products', \App\Http\Controllers\ProductController::class);

Route::resource('genres', \App\Http\Controllers\GenreController::class);

Route::resource('labels', \App\Http\Controllers\LabelController::class);

Route::resource('cart', \App\Http\Controllers\CartController::class);

Route::resource('artists', \App\Http\Controllers\ArtistController::class);

Route::resource('discounts', \App\Http\Controllers\DiscountsController::class);

Auth::routes();
