<?php

namespace App\Providers;

use App\Ecommerce\Seller\Domain\Repository\ShopProductRepository;
use App\Ecommerce\Seller\Framework\Repository\EloquentShopProductRepository;
use App\Profile\Domain\Repository\OrderRepository;
use App\Profile\Domain\Usecases\orders\OrderInteractor;
use App\Profile\Framework\Repository\EloquentOrderRepository;
use Illuminate\Support\ServiceProvider;

class OrderProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(OrderRepository::class, function ($app) {
            return new EloquentOrderRepository();
        });

        $this->app->singleton(OrderInteractor::class, function ($app) {
            $repository = $app->make(OrderRepository::class);
            return OrderInteractor::build($repository);
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
