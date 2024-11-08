<?php

use App\Authentication\Framework\Controllers\api\AuthenticationController;
use App\Ecommerce\Category\Framework\Controllers\api\CategoryApiController;
use App\Ecommerce\Checkout\Framework\Controllers\api\ProceedToCheckoutController;
use App\Ecommerce\Products\Framework\Controllers\api\order\OrderProductController;
use App\Ecommerce\Products\Framework\Controllers\api\order\OrderUserController;
use App\Ecommerce\Products\Framework\Controllers\api\order\TotalOrderCountController;
use App\Ecommerce\Products\Framework\Controllers\api\products\ApiProductController;
use App\Ecommerce\Products\Framework\Controllers\api\products\ProductFavoriteController;
use App\Ecommerce\Products\Framework\Controllers\api\products\TotalProductCount;
use App\Ecommerce\Shop\Framework\Controllers\api\ShopController;
use App\Ecommerce\Shop\Framework\Controllers\api\SubscribeToShopController;
use App\Post\Framework\Controllers\api\CommentController;
use App\Post\Framework\Controllers\api\PostController;
use App\Post\Framework\Controllers\api\PostLikeController;
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

        // posts
        Route::apiResource("posts", PostController::class);
        Route::post("post/like", PostLikeController::class);
        Route::post("post/comment", [CommentController::class, "store"]);

        // Shop
        Route::apiResource("Shop", ShopController::class);
        Route::post("Shop/subscribe", SubscribeToShopController::class);

        // productd
        Route::apiResource("Products", ApiProductController::class);
        Route::apiResource("categories", CategoryApiController::class)->except(["store", "destroy", "update", "edit"]);
        Route::apiResource("product/favorite", ProductFavoriteController::class)->except(["destroy", "update", "show"]);
        Route::get("count", TotalProductCount::class);


        // orders
        Route::get("user/orders", OrderUserController::class);
        Route::get("orders-count", TotalOrderCountController::class);
        Route::post("product/orders", OrderProductController::class);


    });
});
