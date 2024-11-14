<?php

use App\Admin\Framework\Controllers\AdminController;
use App\Admin\Framework\Controllers\Ads\AdsController;
use App\Admin\Framework\Controllers\Category\CategoryController;
use App\Admin\Framework\Controllers\Customer\CustomerController;
use App\Admin\Framework\Controllers\Permission\PermissionController;
use App\Admin\Framework\Controllers\Role\RoleController;
use App\Admin\Framework\Controllers\shop\DisabledShopController;
use App\Admin\Framework\Controllers\shop\EnableShopController;
use App\Admin\Framework\Controllers\shop\ShopController;
use App\Admin\Framework\Controllers\User\UserController;
use App\Http\Controllers\AddAdsToDraftController;
use Illuminate\Support\Facades\Route;

// admin
Route::prefix("/admin")
    ->middleware("can:admin-cards.*")
    ->group(function () {

        Route::resource("ads", AdsController::class);
        Route::post("ads/draft", AddAdsToDraftController::class)
            ->name("admin.ads.draft");

        Route::get("/", AdminController::class)
            ->name("admin");


        Route::post("/disable-shop", DisabledShopController::class)
            ->name("admin.disabled.shop");
        Route::post("/enable-shop", EnableShopController::class)
            ->name("admin.disabled.shop");

        Route::resource("/categories", CategoryController::class)
            ->names("admin.category")
            ->except(["show"]);


        Route::get("/boutiques", ShopController::class)
            ->name("admin.shop");


        Route::get("/clients", CustomerController::class)
            ->name("admin.customer");


        Route::resource("/utilisateurs", UserController::class)
            ->middleware("can:super-admin-cards.*")
            ->names("admin.users")
            ->except(["show"]);

        Route::resource("/roles", RoleController::class)
            ->middleware("can:super-admin-cards.*")
            ->names("admin.roles")
            ->except(["show"]);

        Route::resource("/permissions", PermissionController::class)
            ->middleware("can:super-admin-cards.*")
            ->names("admin.permissions")
            ->except(["show"]);
    });
