<?php

namespace App\Providers;

use App\Ecommerce\Seller\Domain\Repository\ShopRepository;
use App\Ecommerce\Seller\Domain\Usecases\shop\ShopInteractor;
use App\Ecommerce\Seller\Framework\Repository\EloquentShopRepository;
use Illuminate\Support\ServiceProvider;

class ShopServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ShopRepository::class, function ($app) {
            return new EloquentShopRepository();
        });

        $this->app->singleton(ShopInteractor::class, function ($app) {
            $repository = $app->make(ShopRepository::class);
            return ShopInteractor::build($repository);
        });
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
