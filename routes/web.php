<?php

use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\store\orders\OrderController;
use App\Http\Controllers\admin\store\products\ProductController;
use App\Http\Controllers\admin\store\StoreController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view("products.home");
})->name('home');

Route::get('/products/{products}', [\App\Http\Controllers\ProductController::class,'show'])->name('products.show');
Route::get('/products', [\App\Http\Controllers\ProductController::class,'index'])->name('products.index');

Route::get('cart',\App\Http\Controllers\CartController::class)->name('cart.index');


Route::middleware("auth")->group(function () {
    Route::get("/store/create", [StoreController::class, "create"])->name("store.create");
    Route::post("/store", [StoreController::class, "store"])->name("store.store");

    Route::middleware("has_store_middleware")->group(function () {
        Route::get('/admin', HomeController::class);
        Route::resource("/store", StoreController::class)->except("create","store");

        Route::resource('/admin/products', ProductController::class)->names("admin.products");

        Route::resource('/admin/orders', OrderController::class)->only(['index','update']);
    });
});

