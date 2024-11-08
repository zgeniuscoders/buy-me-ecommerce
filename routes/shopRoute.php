<?php

use App\Ecommerce\Products\Framework\Controllers\sellers\orders\OrderController;
use App\Ecommerce\Products\Framework\Controllers\sellers\products\ProductController;
use App\Ecommerce\Shop\Framework\AdminController;
use App\Ecommerce\Shop\Framework\Controllers\sellers\ChangeShopInfoController;
use App\Ecommerce\Shop\Framework\Controllers\sellers\DeleteShopController;
use App\Ecommerce\Shop\Framework\Controllers\sellers\ShopSettingController;
use App\Ecommerce\Shop\Framework\Controllers\sellers\StoreController;
use App\Ecommerce\Shop\Framework\Controllers\sellers\UpdateShopImageController;
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

        Route::post("/changer-les-information-de-ma-boutique", ChangeShopInfoController::class)
            ->name("Shop.update.name");
        Route::post("/changer-image-de-ma-boutique", UpdateShopImageController::class)
            ->name("Shop.update.image");
        Route::delete("/supprimer-ma-boutique", DeleteShopController::class)
            ->name("Shop.delete");

        Route::get('/', AdminController::class)->name("Shop");
        // Route::resource("/ma-boutique/store", StoreController::class)
        //     ->except("create", "store")
        //     ->names("admin.store");

        Route::resource('/articles', ProductController::class)->names("admin.Products");

        Route::resource('/commandes', OrderController::class)->only(['index', 'update']);
    });
