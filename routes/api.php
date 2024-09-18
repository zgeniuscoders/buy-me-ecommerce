<?php

use App\Http\Controllers\api\AuthenticationController;
use App\Http\Controllers\api\ProceedToCheckoutController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;



Route::middleware("auth")->group(function () {
    Route::post("/procced-to-checkout", ProceedToCheckoutController::class);
});

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::prefix("v1")->group(function(){
    Route::post("/login", [AuthenticationController::class, "login"]);
    Route::post("/register", [AuthenticationController::class, "register"]);
});

Route::prefix("v1")->middleware("auth:sanctum")->group(function() {
    Route::post("/logout", [AuthenticationController::class, "logout"]);
});

