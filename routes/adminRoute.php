<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\admin\UserController;
use App\Http\Controllers\admin\admin\AdminController;
use App\Http\Controllers\admin\admin\CategoryController;
use App\Http\Controllers\admin\admin\CustomerController;
use App\Http\Controllers\admin\admin\DisabledShopController;
use App\Http\Controllers\admin\admin\ShopController;

// admin 
Route::prefix("/admin")
    ->middleware("can:admin-cards.*")
    ->group(function () {

        Route::get("/", AdminController::class)
            ->name("admin");


        Route::post("/disable-shop", DisabledShopController::class)
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
    });
