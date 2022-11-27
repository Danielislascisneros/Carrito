<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;

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

Route::get('/', [CartController::class, 'shop'])->name('shop');

Route::get('/cart', [CartController::class, 'cart'])->name('cart.index');
Route::get('/cart2', [CartController::class, 'cart2'])->name('cart2');
Route::get('/cart3', [CartController::class, 'cart3'])->name('cart3');
Route::get('/cart3-vista', [CartController::class, 'cart3-vista'])->name('cart3-vista');
Route::post('/add', [CartController::class, 'add'])->name('cart.store');


Route::post('/update', [CartController::class, 'update'])->name('cart.update');
Route::post('/remove', [CartController::class, 'remove'])->name('cart.remove');
Route::post('/clear', [CartController::class, 'clear'])->name('cart.clear');
