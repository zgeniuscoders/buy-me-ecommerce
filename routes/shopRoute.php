<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\store\ChangeShopInfoController;
use App\Http\Controllers\admin\store\DeleteShopController;
use App\Http\Controllers\admin\store\StoreController;
use App\Http\Controllers\admin\store\orders\OrderController;
use App\Http\Controllers\admin\store\products\ProductController;
use App\Http\Controllers\admin\store\ShopSettingController;
use App\Http\Controllers\admin\store\UpdateShopImageController;

// shop
Route::middleware("dont_has_shop_middleware")->group(function () {
    Route::get("/cree-ma-boutique", [StoreController::class, "create"])->name("admin.store.create");
    Route::post("/ma-boutique", [StoreController::class, "store"])->name("admin.store.store");
});

Route::middleware(["has_store_middleware", "has_shop_enabled"])
    ->prefix("ma-boutique")
    ->group(function () {
        Route::get("/parametres", ShopSettingController::class)->name("shop.settings");

        Route::post("/changer-les-information-de-ma-boutique", ChangeShopInfoController::class)
            ->name("shop.update.name");
        Route::post("/changer-image-de-ma-boutique", UpdateShopImageController::class)
            ->name("shop.update.image");
        Route::delete("/supprimer-ma-boutique", DeleteShopController::class)
            ->name("shop.delete");

        Route::get('/', HomeController::class)->name("shop");
        // Route::resource("/ma-boutique/store", StoreController::class)
        //     ->except("create", "store")
        //     ->names("admin.store");

        Route::resource('/articles', ProductController::class)->names("admin.products");

        Route::resource('/commandes', OrderController::class)->only(['index', 'update']);
    });
