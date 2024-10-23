<?php

use App\Http\Controllers\Acount\AcountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CartController;
use App\Http\Controllers\admin\HomeController;
use App\Http\Controllers\admin\store\StoreController;
use App\Http\Controllers\admin\store\orders\OrderController;
use App\Http\Controllers\admin\store\products\ProductController;
use App\Http\Controllers\api\product\ProductFavoriteController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\FavoriteController;
use App\Http\Controllers\StoreController as ControllersStoreController;

Route::get('/', \App\Http\Controllers\HomeController::class)->name('home');

Route::get('/products/{products}', [\App\Http\Controllers\ProductController::class, 'show'])->name('products.show');
Route::get('/products', [\App\Http\Controllers\ProductController::class, 'index'])->name('products.index');

Route::resource("store", ControllersStoreController::class)
    ->only(["index", "show"]);

Route::middleware("auth")->group(function () {

    Route::get('cart', [CartController::class, 'getCart'])->name('cart.index');
    Route::post('/checkout', CheckoutController::class)->name("checkout");

    Route::get("/ma-boutique/store/create", [StoreController::class, "create"])->name("admin.store.create");
    Route::post("/ma-boutique/store", [StoreController::class, "store"])->name("admin.store.store");


    Route::resource("articles/favorite", FavoriteController::class)
        ->names("product.favorite")
        ->except(["create", "edit", "update"]);

    // account 
    Route::resource("mon-compte", AcountController::class)->names("account");

    Route::middleware("has_store_middleware")->group(function () {
        Route::get('/ma-boutique', HomeController::class)->name("admin");
        Route::resource("/ma-boutique/store", StoreController::class)
            ->except("create", "store")
            ->names("admin.store");

        Route::resource('/ma-boutique/articles', ProductController::class)->names("admin.products");

        Route::resource('/ma-boutique/commandes', OrderController::class)->only(['index', 'update']);
    });
});
