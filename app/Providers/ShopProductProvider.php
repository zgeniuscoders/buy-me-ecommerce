<?php

namespace App\Providers;

use App\Ecommerce\Products\Domain\Usecases\Products\ShopProductInteractor;
use App\Ecommerce\Seller\Domain\Repository\ShopProductRepository;
use App\Ecommerce\Seller\Framework\Repository\EloquentShopProductRepository;
use Illuminate\Support\ServiceProvider;

class ShopProductProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ShopProductRepository::class, function ($app) {
            return new EloquentShopProductRepository();
        });

        $this->app->singleton(ShopProductInteractor::class, function ($app) {
            $repository = $app->make(ShopProductRepository::class);
            return ShopProductInteractor::build($repository);
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
