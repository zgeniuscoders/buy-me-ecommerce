<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\FilterProductController;
use App\Http\Controllers\StoreController as ControllersStoreController;

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');
Route::get('/search', SearchController::class)->name("search");

Route::get('/articles/{products}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');

Route::get('/articles-filtre', FilterProductController::class)->name("filter");

Route::resource("store", ControllersStoreController::class)
    ->only(["show"]);


Route::middleware("auth")->group(function () {

    include "adminRoute.php";

    Route::get('/user', function () {
        return request()->user();
    });

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
