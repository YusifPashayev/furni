<?php

use App\Http\Controllers\Client\AboutController;
use App\Http\Controllers\Client\BlogController;
use App\Http\Controllers\Client\CartController;
use App\Http\Controllers\Client\CheckoutController;
use App\Http\Controllers\Client\HomeController;
use App\Http\Controllers\Client\ContactController;
use App\Http\Controllers\Client\ServicesController;
use App\Http\Controllers\Client\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, "index"])->name("home");
Route::get('/about', [AboutController::class, "index"])->name("about");
Route::get('/blog', [BlogController::class, "index"])->name("blog");
Route::get('/cart', [CartController::class, "index"])->name("cart");
Route::get('/chechout', [CheckoutController::class, "index"])->name("checkout");
Route::get('/contact', [ContactController::class, "index"])->name("contact");
Route::get('/services', [ServicesController::class, "index"])->name("services");
Route::get('/shop', [ShopController::class, "index"])->name("shop");
Route::get('/shop/{slug}', [ShopController::class, "productsByCategory"])->name("shop.category");
