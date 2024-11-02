<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\store\StoreController;
use App\Http\Controllers\admin\store\orders\OrderController;
use App\Http\Controllers\admin\store\products\ProductController;


// shop
Route::middleware("dont_has_shop_middleware")->group(function () {
    Route::get("/cree-ma-boutique", [StoreController::class, "create"])->name("admin.store.create");
    Route::post("/ma-boutique", [StoreController::class, "store"])->name("admin.store.store");
});

Route::middleware("has_store_middleware")->group(function () {
    Route::get('/ma-boutique', HomeController::class)->name("shop");
    // Route::resource("/ma-boutique/store", StoreController::class)
    //     ->except("create", "store")
    //     ->names("admin.store");

    Route::resource('/ma-boutique/articles', ProductController::class)->names("admin.products");

    Route::resource('/ma-boutique/commandes', OrderController::class)->only(['index', 'update']);
});
