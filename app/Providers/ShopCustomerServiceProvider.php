<?php

namespace App\Providers;

use App\Ecommerce\Seller\Domain\Repository\ShopCustomerRepository;
use App\Ecommerce\Seller\Domain\Usecases\Customer\ShopCustomerInteractor;
use App\Ecommerce\Seller\Framework\Repository\EloquentShopCustomerRepository;
use Illuminate\Support\ServiceProvider;

class ShopCustomerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ShopCustomerRepository::class, function ($app) {
            return new EloquentShopCustomerRepository();
        });

        $this->app->singleton(ShopCustomerInteractor::class, function ($app) {
            $repository = $app->make(ShopCustomerRepository::class);
            return ShopCustomerInteractor::build($repository);
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
