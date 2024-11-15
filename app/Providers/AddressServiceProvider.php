<?php

namespace App\Providers;

use App\Ecommerce\Products\Domain\Repository\OrderRepository;
use App\Ecommerce\Products\Domain\Usecases\orders\OrderInteractor;
use App\Ecommerce\Products\Framework\Repository\EloquentOrderRepository;
use App\Profile\Domain\Repository\AddressRepository;
use App\Profile\Domain\Usecases\AddressInteractor;
use App\Profile\Framework\Repository\EloquentAddressRepository;
use Illuminate\Support\ServiceProvider;

class AddressServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(AddressRepository::class, function ($app) {
            return new EloquentAddressRepository();
        });

        $this->app->singleton(AddressInteractor::class, function ($app) {
            $repository = $app->make(AddressRepository::class);
            return AddressInteractor::build($repository);
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
