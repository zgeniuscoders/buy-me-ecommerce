<?php

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\store\StoreController;
use App\Http\Controllers\api\ProceedToCheckoutController;
use App\Http\Controllers\admin\store\orders\OrderController;
use App\Http\Controllers\admin\store\products\ProductController;
use App\Http\Controllers\CheckoutController;

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');

Route::get('/products/{products}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');


Route::post('/checkout', CheckoutController::class)->name("checkout");

Route::middleware("auth")->group(function () {

    Route::get('cart', [CartController::class, 'getCart'])->name('cart.index');


    Route::get("admin/store/create", [StoreController::class, "create"])->name("store.create");
    Route::post("admin/store", [StoreController::class, "store"])->name("store.store");

    Route::middleware("has_store_middleware")->group(function () {
        Route::get('/admin', HomeController::class);
        Route::resource("/admin/store", StoreController::class)->except("create", "store");

        Route::resource('/admin/products', ProductController::class)->names("admin.products");

        Route::resource('/admin/orders', OrderController::class)->only(['index', 'update']);
    });
});
