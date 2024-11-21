<?php

use App\Profile\Framework\Controllers\AccountController;
use App\Profile\Framework\Controllers\AddressController;
use App\Profile\Framework\Controllers\ChangeEmailOrNameController;
use App\Profile\Framework\Controllers\ChangePasswordController;
use App\Profile\Framework\Controllers\FavoriteController as AccountFavoriteController;
use App\Profile\Framework\Controllers\orders\CancelOrderController;
use App\Profile\Framework\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// account
Route::prefix("/mon-compte")->group(function () {
    Route::get("/", AccountController::class)->name("account.index");
    Route::resource("/profile", ProfileController::class)
        ->names("account.profile");

    Route::put('/commande/{order}/annuler', CancelOrderController::class)
        ->name("account.order.cancel");

    Route::put('/commande/{order}/livrer', CancelOrderController::class)
        ->name("account.order.delivered");

    Route::post("/address", [AddressController::class, 'store'])
        ->name("account.address.store");

    Route::resource("/address", AddressController::class)
        ->names("account.address")
        ->except(["index", "edit", "show"]);

    Route::resource("/articles-favorite", AccountFavoriteController::class)
        ->names("account.favorite")
        ->except(["edit", "update", "show", "create"]);

    // Route::delete("/articles-favorite/{id}", [AccountFavoriteController::class, "index"])
    //     ->name("account.favorite.index");
});
