<?php

use App\Admin\Framework\Controllers\AdminController;
use App\Admin\Framework\Controllers\Category\CategoryController;
use App\Admin\Framework\Controllers\Customer\CustomerController;
use App\Admin\Framework\Controllers\shop\DisabledShopController;
use App\Admin\Framework\Controllers\shop\EnableShopController;
use App\Admin\Framework\Controllers\shop\ShopController;
use App\Admin\Framework\Controllers\User\UserController;
use Illuminate\Support\Facades\Route;

// admin
Route::prefix("/admin")
//    ->middleware("can:admin-cards.*")
    ->group(function () {

        Route::get("/", AdminController::class)
            ->name("admin");


        Route::post("/disable-Shop", DisabledShopController::class)
            ->name("admin.disabled.Shop");
        Route::post("/enable-Shop", EnableShopController::class)
            ->name("admin.disabled.Shop");

        Route::resource("/categories", CategoryController::class)
            ->names("admin.Category")
            ->except(["show"]);


        Route::get("/boutiques", ShopController::class)
            ->name("admin.Shop");


        Route::get("/clients", CustomerController::class)
            ->name("admin.customer");


        Route::resource("/utilisateurs", UserController::class)
            ->middleware("can:super-admin-cards.*")
            ->names("admin.users")
            ->except(["show"]);
    });
