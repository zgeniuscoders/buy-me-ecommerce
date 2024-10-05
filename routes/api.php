<?php

use App\Http\Controllers\api\AddProductFavoriteController;
use App\Http\Controllers\api\ApiProductController;
use App\Http\Controllers\api\AuthenticationController;
use App\Http\Controllers\api\CategoryApiController;
use App\Http\Controllers\api\ProceedToCheckoutController;
use App\Http\Controllers\api\ShopController;
use App\Http\Controllers\api\TotalOrderCountController;
use App\Http\Controllers\api\TotalProductCount;
use App\Http\Controllers\SubscribeToShopController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware("auth")->group(function () {
    Route::post("/procced-to-checkout", ProceedToCheckoutController::class);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix("v1")->group(function () {
    
    Route::post("/login", [AuthenticationController::class, "login"]);
    Route::post("/register", [AuthenticationController::class, "register"]);

    Route::middleware("auth:sanctum")->group(function () {
        Route::delete("/logout", [AuthenticationController::class, "logout"]);
        Route::apiResource("shop", ShopController::class);
        Route::apiResource("products", ApiProductController::class);
        // Route::get("categories", CategoryApiController::class);
        Route::apiResource("categories", CategoryApiController::class)->except(["store", "destroy", "update", "edit"]);

        Route::get("count", TotalProductCount::class);
        Route::get("orders-count", TotalOrderCountController::class);

        Route::post("shop/subscribe", SubscribeToShopController::class);
        Route::post("product/favorite", AddProductFavoriteController::class);

    });

    
});
