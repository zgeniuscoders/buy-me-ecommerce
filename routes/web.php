<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/admin', function () {
    return Inertia::render("admin/home");
});
