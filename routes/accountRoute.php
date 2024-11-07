<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddressController;
use App\Http\Controllers\Account\AccountController;
use App\Http\Controllers\Account\ProfileController;
use App\Http\Controllers\Account\ChangePasswordController;
use App\Http\Controllers\Account\ChangeEmailOrNameController;
use App\Http\Controllers\Account\FavoriteController as AccountFavoriteController;

// account 
Route::prefix("/mon-compte")->group(function () {
    Route::get("/", AccountController::class)->name("account.index");
    Route::resource("/profile", ProfileController::class)
        ->names("account.profile");


    Route::post("/address", [AddressController::class, 'store'])
        ->name("account.address.store");

    Route::resource("/address", AddressController::class)
        ->names("account.address")
        ->except(["index", "edit", "show"]);

    Route::put("/changer-mot-de-passe", ChangePasswordController::class)
        ->name("account.changePassword");

    Route::put("/changer-mon-nom-ou-adresse-email", ChangeEmailOrNameController::class)
        ->name("account.changeEmail");

    Route::resource("/articles-favorite", AccountFavoriteController::class)
        ->names("account.favorite")
        ->except(["edit", "update", "show", "create"]);

    // Route::delete("/articles-favorite/{id}", [AccountFavoriteController::class, "index"])
    //     ->name("account.favorite.index");
});
