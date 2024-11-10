<?php

use App\Ecommerce\Seller\Framework\Controllers\AdminController;
use App\Ecommerce\Seller\Framework\Controllers\ChangeShopInfoController;
use App\Ecommerce\Seller\Framework\Controllers\DeleteShopController;
use App\Ecommerce\Seller\Framework\Controllers\orders\OrderController;
use App\Ecommerce\Seller\Framework\Controllers\products\ProductController;
use App\Ecommerce\Seller\Framework\Controllers\ShopSettingController;
use App\Ecommerce\Seller\Framework\Controllers\StoreController;
use App\Ecommerce\Seller\Framework\Controllers\UpdateShopImageController;
use Illuminate\Support\Facades\Route;

// Shop
Route::middleware("dont_has_shop_middleware")->group(function () {
    Route::get("/cree-ma-boutique", [StoreController::class, "create"])->name("admin.store.create");
    Route::post("/ma-boutique", [StoreController::class, "store"])->name("admin.store.store");
});

Route::middleware(["has_store_middleware", "has_shop_enabled"])
    ->prefix("ma-boutique")
    ->group(function () {

        Route::get("/parametres", ShopSettingController::class)->name("Shop.settings");

        Route::post("/changer-les-information-de-ma-boutique/{store}", [StoreController::class, "update"])
            ->name("Shop.update.name");

        Route::post("/changer-image-de-ma-boutique", UpdateShopImageController::class)
            ->name("Shop.update.image");

        Route::delete("/supprimer-ma-boutique/{store}", [StoreController::class, "destroy"])
            ->name("Shop.delete");

        Route::get('/', AdminController::class)->name("Shop");
        // Route::resource("/ma-boutique/store", StoreController::class)
        //     ->except("create", "store")
        //     ->names("admin.store");

        Route::resource('/articles', ProductController::class)->names("admin.Products");

        Route::resource('/commandes', OrderController::class)->only(['index', 'update']);
    });
