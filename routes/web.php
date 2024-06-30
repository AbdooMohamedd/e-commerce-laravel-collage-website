<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Contracts\Container\BindingResolutionException;
use App\Http\Controllers\ProductsController;
// routes/web.php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CartPageController;
use App\Http\Controllers\SignInController;


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

Route::get('/', 'IndexController@index')->name('index');
Route::get('/about', 'AboutController@index')->name('about');
Route::get('/cartpage', 'CartPageController@index')->name('cartpage');
Route::get('/category', 'CategoryController@index')->name('category');
Route::get('/faq', 'FaqController@index')->name('faq');
Route::get('/product-detail', 'ProductDetailController@index')->name('product-detail');
Route::get('/profile', 'ProfileController@show')->name('profile')->middleware('auth');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('/');

// Route to display the sign-in form
Route::get('/sign-in', [SignInController::class, 'showSignInForm'])->name('sign-in');

// Route to handle sign-in form submission
Route::post('/sign-in', [SignInController::class, 'signIn'])->name('sign-in.submit');

// Combined routes for profile management 
Route::post('/store-profile', [SignInController::class, 'signIn'])->name('store.profile');
Route::get('/edit-profile', [SignInController::class, 'showSignInForm'])->name('edit.profile');

// Assuming you have an update method in SignInController
Route::put('/update-profile/{id}', [SignInController::class, 'update'])->name('update.profile');
Route::get('/signin', [SignInController::class, 'showSignInForm'])->name('show.signin');

Route::get('/products', [ProductController::class, 'index'])->name('products');

use App\Http\Controllers\ProductDetailController;
// Route::get('/product-detail/{id}', 'ProductDetailController@show');
Route::get('/product-detail/{id}', 'ProductDetailController@show')->name('product-detail');



use App\Http\Controllers\CategoryController;
Route::get('/category', [ProductController::class, 'index']);
Route::get('/category', [CategoryController::class, 'show']);


Route::get('/cartpage', 'CartPageController@index')->name('cart.page');

Route::middleware(['auth'])->group(function () {
    // Route to handle adding a product to the cart
    Route::post('/cart/add', 'CartPageController@addToCart')->name('cart.add');
});

use App\Http\Controllers\CartController;

Route::get('/cartpage', [CartController::class, 'index'])->name('cart.index');
Route::get('/cartpage', [CartController::class, 'index'])->name('cart.page');

Route::delete('/remove-item/{id}', [CartController::class, 'removeItem'])->name('cart.remove');

Route::post('/checkout', 'CartPageController@checkout')->name('cart.checkout');
