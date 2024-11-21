<?php

namespace App\Providers;

use App\Profile\Domain\Repository\AddressRepository;
use App\Profile\Domain\Usecases\account\AccountInteractor;
use App\Profile\Domain\Usecases\AddressInteractor;
use App\Profile\Framework\Repository\EloquentAccountRepository;
use App\Profile\Framework\Repository\EloquentAddressRepository;
use Illuminate\Support\ServiceProvider;

class AccountServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(AccountServiceProvider::class, function ($app) {
            return new EloquentAccountRepository();
        });

        $this->app->singleton(AccountInteractor::class, function ($app) {
            $repository = $app->make(AccountServiceProvider::class);
            return AccountInteractor::build($repository);
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
