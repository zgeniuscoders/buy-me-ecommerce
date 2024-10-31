<?php

use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Account\ChangeEmailOrNameController;
use App\Http\Controllers\Account\ChangePasswordController;
use App\Http\Controllers\Account\FavoriteController as AccountFavoriteController;
use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\admin\admin\AdminController;
use App\Http\Controllers\admin\admin\CategoryController;
use App\Http\Controllers\admin\admin\UserController;
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
    ->only(["show"]);

Route::middleware("auth")->group(function () {

    Route::get('cart', [CartController::class, 'getCart'])->name('cart.index');
    Route::post('/checkout', CheckoutController::class)->name("checkout");

    Route::get("/cree-ma-boutique", [StoreController::class, "create"])->name("admin.store.create");
    Route::post("/ma-boutique", [StoreController::class, "store"])->name("admin.store.store");

    //favorite
    Route::resource("articles/favorite", FavoriteController::class)
        ->names("product.favorite")
        ->except(["create", "edit", "update", "show", "index"]);


    // admin 
    Route::prefix("/admin")->group(function () {
        Route::get("/", AdminController::class)
            ->name("admin");

        Route::resource("/categories", CategoryController::class)
            ->names("admin.category")
            ->except(["show"]);

        Route::resource("/utilisateurs", UserController::class)
            ->names("admin.users")
            ->except(["show"]);
    });

    // Route::delete("/mon-compte/articles-favorite/{id}", [AccountFavoriteController::class, "index"])
    //     ->name("account.favorite.index");

    // account 
    Route::prefix("/mon-compte")->group(function () {
        Route::resource("/", AccountController::class)->names("account");
        Route::resource("/profile", ProfileController::class)
            ->names("account.profile");

        Route::put("/changer-mot-de-passe", ChangePasswordController::class)
            ->name("account.changePassword");

        Route::put("/changer-mon-nom-ou-adresse-email", ChangeEmailOrNameController::class)
            ->name("account.changeEmail");

        Route::resource("/articles-favorite", AccountFavoriteController::class)
            ->names("account.favorite")
            ->except(["edit", "update", "show", "create"]);
    });


    Route::middleware("has_store_middleware")->group(function () {
        Route::get('/ma-boutique', HomeController::class)->name("shop");
        // Route::resource("/ma-boutique/store", StoreController::class)
        //     ->except("create", "store")
        //     ->names("admin.store");

        Route::resource('/ma-boutique/articles', ProductController::class)->names("admin.products");

        Route::resource('/ma-boutique/commandes', OrderController::class)->only(['index', 'update']);
    });
});
