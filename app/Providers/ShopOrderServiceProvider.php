<?php

namespace App\Providers;

use App\Ecommerce\Seller\Domain\Repository\ShopOrderRepository;
use App\Ecommerce\Seller\Domain\Usecases\order\ShopOrderInteractor;
use App\Ecommerce\Seller\Framework\Repository\EloquentShopOrderRepository;
use Illuminate\Support\ServiceProvider;

class ShopOrderServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ShopOrderRepository::class, function ($app) {
            return new EloquentShopOrderRepository();
        });

        $this->app->singleton(ShopOrderInteractor::class, function ($app) {
            $repository = $app->make(ShopOrderRepository::class);
            return ShopOrderInteractor::build($repository);
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
