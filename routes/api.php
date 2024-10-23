<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ShopController;
use App\Http\Controllers\api\post\PostController;
use App\Http\Controllers\api\CategoryApiController;
use App\Http\Controllers\SubscribeToShopController;
use App\Http\Controllers\api\post\CommentController;
use App\Http\Controllers\api\post\PostLikeController;
use App\Http\Controllers\api\AuthenticationController;
use App\Http\Controllers\api\order\OrderUserController;
use App\Http\Controllers\api\product\TotalProductCount;
use App\Http\Controllers\api\ProceedToCheckoutController;
use App\Http\Controllers\api\order\OrderProductController;
use App\Http\Controllers\api\product\ApiProductController;
use App\Http\Controllers\api\order\TotalOrderCountController;
use App\Http\Controllers\api\product\ProductFavoriteController;


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

        // posts 
        Route::apiResource("posts", PostController::class);
        Route::post("post/like", PostLikeController::class);
        Route::post("post/comment", [CommentController::class, "store"]);

        // shop 
        Route::apiResource("shop", ShopController::class);
        Route::post("shop/subscribe", SubscribeToShopController::class);

        // productd
        Route::apiResource("products", ApiProductController::class);
        Route::apiResource("categories", CategoryApiController::class)->except(["store", "destroy", "update", "edit"]);
        Route::apiResource("product/favorite", ProductFavoriteController::class)->except(["destroy", "update", "show"]);
        Route::get("count", TotalProductCount::class);


        // orders 
        Route::get("user/orders", OrderUserController::class);
        Route::get("orders-count", TotalOrderCountController::class);
        Route::post("product/orders", OrderProductController::class);


    });
});
