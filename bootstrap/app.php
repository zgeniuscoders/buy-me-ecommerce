<?php

use App\Http\Middleware\HandleInertiaRequests;
use App\Http\Middleware\RedirectIfHasShopMiddleware;
use App\Http\Middleware\RedirectIfShopDisabled;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Configuration\Exceptions;
use Illuminate\Foundation\Configuration\Middleware;


return Application::configure(basePath: dirname(__DIR__))
    ->withRouting(
        web: __DIR__ . '/../routes/web.php',
        api: __DIR__ . '/../routes/api.php',
        commands: __DIR__ . '/../routes/console.php',
        health: '/up',
    )
    ->withMiddleware(function (Middleware $middleware) {
        $middleware->web(append: [
            HandleInertiaRequests::class,
        ]);
        $middleware->alias([
            "has_store_middleware" => \App\Http\Middleware\HasStoreMiddleware::class,
            "dont_has_shop_middleware" => RedirectIfHasShopMiddleware::class,
            "has_shop_enabled" => RedirectIfShopDisabled::class
        ]);
    })
    ->withExceptions(function (Exceptions $exceptions) {
        //
    })->create();
