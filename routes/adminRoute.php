<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\admin\UserController;
use App\Http\Controllers\admin\admin\AdminController;
use App\Http\Controllers\admin\admin\CategoryController;

// admin 
Route::prefix("/admin")
    ->middleware("can:admin-cards.*")
    ->group(function () {

        Route::get("/", AdminController::class)
            ->name("admin");

        Route::resource("/categories", CategoryController::class)
            ->names("admin.category")
            ->except(["show"]);

        Route::resource("/utilisateurs", UserController::class)
            ->middleware("can:super-admin-cards.*")
            ->names("admin.users")
            ->except(["show"]);
    });
