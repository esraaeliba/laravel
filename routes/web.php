<?php

use App\Http\Controllers\AboutusController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ContactusController;
use App\Http\Controllers\HomePageController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WishListController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
    // return ['Laravel' => app()->version()];
    return redirect('/homepage');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/account', [AccountController::class, 'index'])->name('account');
Route::get('/categories', [CategoryController::class, 'index'])->name('category');
Route::get('/aboutus', [AboutusController::class, 'index'])->name('aboutus');
Route::get('/contactus', [ContactusController::class, 'index'])->name('contactus');
Route::get('/homepage', [HomePageController::class, 'index'])->name('homepage');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/wishlist', [WishListController::class, 'index'])->name('wishlist');


Route::apiResource('users',UserController::class);
Route::apiResource('categories',CategoryController::class);
Route::apiResource('orders',OrderController::class);
Route::apiResource('users',UserController::class);
Route::apiResource('wishlists',WishListController::class);

Route::post('cart/products/{product}', [CartController::class, 'addToCart'])->name('add_product_to_cart');
Route::delete('cart/products/{product}', [CartController::class, 'removeFromCart'])->name('remove_product_from_cart');
Route::get('cart/products', [CartController::class, 'getCart'])->name('get_cart');

Route::post('wishlist/products/{product}', [WishListController::class, 'addToWish'])->name('add_product_to_wish');
Route::delete('wishlist/products/{product}', [WishListController::class, 'removeFromWish'])->name('remove_product_from_wish');
Route::get('wishlist/products', [WishListController::class, 'getWish'])->name('get_wish');

Route::resource("/product", ProductController::class);