<?php

use App\Chat\Framework\Controllers\SendMessageController;
use App\Chat\Framework\Controllers\ViewMessageController;
use App\Core\Framework\Controllers\HomeController;
use App\Ecommerce\Checkout\Framework\Controllers\CheckoutController;
use App\Ecommerce\Products\Framework\Controllers\cart\CartController;
use App\Ecommerce\Products\Framework\Controllers\products\FavoriteController;
use App\Ecommerce\Products\Framework\Controllers\products\FilterProductController;
use App\Ecommerce\Products\Framework\Controllers\products\NewArrivalsController;
use App\Ecommerce\Products\Framework\Controllers\products\ProductController;
use App\Ecommerce\Search\Framework\Controllers\SearchController;
use App\Ecommerce\Seller\Framework\Controllers\ShopDisabledController;
use App\Ecommerce\Shop\Framework\Controllers\StoreController as ControllersStoreController;
use App\Http\Controllers\GetMessageController;
use App\Models\User;
use App\Profile\Framework\Controllers\ChangeEmailOrNameController;
use App\Profile\Framework\Controllers\ChangePasswordController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/search', SearchController::class)->name("search");

Route::get('/articles/{products}', [ProductController::class, 'show'])->name('products.show');
Route::get('/articles', [ProductController::class, 'index'])->name('products.index');

Route::get('/nouveautes', NewArrivalsController::class)
    ->name("products.new-arrivals");

Route::get('/articles-filtre', FilterProductController::class)->name("filter");

Route::resource("store", ControllersStoreController::class)
    ->only(["show"]);


Route::middleware("auth")->group(function () {

    include "adminRoute.php";

    Route::get('/user', function () {
        return request()->user();
    });

    Route::get('/messages/{receiverId}', GetMessageController::class);
    Route::post('/messages', SendMessageController::class);
    Route::get("/chat", ViewMessageController::class);

    Route::put("/changer-mot-de-passe", ChangePasswordController::class)
        ->name("account.changePassword");

    Route::put("/changer-mon-nom-ou-adresse-email", ChangeEmailOrNameController::class)
        ->name("account.changeEmail");

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
