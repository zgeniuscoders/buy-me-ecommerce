<?php

use App\Ecommerce\Checkout\Framework\Controllers\CheckoutController;
use App\Ecommerce\Products\Framework\Controllers\cart\CartController;
use App\Ecommerce\Products\Framework\Controllers\products\FavoriteController;
use App\Ecommerce\Products\Framework\Controllers\products\FilterProductController;
use App\Ecommerce\Search\Framework\Controllers\SearchController;
use App\Ecommerce\Shop\Framework\Controllers\ShopDisabledController;
use App\Ecommerce\Shop\Framework\Controllers\StoreController as ControllersStoreController;
use Illuminate\Support\Facades\Route;

Route::get('/', \App\Core\Framework\Controllers\HomeController::class)->name('home');
Route::get('/search', SearchController::class)->name("search");

Route::get('/articles/{Products}', [\App\Ecommerce\Products\Framework\Controllers\products\ProductController::class, 'show'])->name('Products.show');
Route::get('/Products', [\App\Ecommerce\Products\Framework\Controllers\products\ProductController::class, 'index'])->name('Products.index');

Route::get('/articles-filtre', FilterProductController::class)->name("filter");

Route::resource("store", ControllersStoreController::class)
    ->only(["show"]);


Route::middleware("auth")->group(function () {

    include "adminRoute.php";

    Route::get('/user', function () {
        return request()->user();
    });

    Route::get("/disabled", ShopDisabledController::class)->name("disabled");

    Route::middleware("can:user-cards.*")->group(function () {

        Route::get('cart', [CartController::class, 'getCart'])->name('cart.index');
        Route::post('/checkout', CheckoutController::class)->name("checkout");

        //favorite
        Route::resource("articles/favorite", FavoriteController::class)
            ->names("product.favorite")
            ->except(["create", "edit", "update", "show", "index"]);

        include "accountRoute.php";

        include "shopRoute.php";
    });
});
