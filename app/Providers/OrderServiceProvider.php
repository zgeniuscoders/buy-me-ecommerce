<?php

namespace App\Providers;

use App\Ecommerce\Products\Domain\Repository\OrderRepository;
use App\Ecommerce\Products\Domain\Usecases\orders\OrderInteractor;
use App\Ecommerce\Products\Framework\Repository\EloquentOrderRepository;
use Illuminate\Support\ServiceProvider;

class OrderServiceProvider extends ServiceProvider
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
