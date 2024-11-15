<?php

namespace App\Providers;

use App\Admin\Domain\Repository\CustomerRepository;
use App\Admin\Domain\Usecases\Customer\CustomerInteractor;
use App\Admin\Framework\Repository\EloquentCustomerRepository;
use App\Ecommerce\Chat\Domain\Repository\ChatRepository;
use App\Ecommerce\Chat\Domain\Usecases\ChatInteractor;
use App\Ecommerce\Chat\Framework\Repository\EloquentChatListRepository;
use Illuminate\Support\ServiceProvider;

class CustomerServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(CustomerRepository::class, function ($app) {
            return new EloquentCustomerRepository();
        });

        $this->app->singleton(CustomerInteractor::class, function ($app) {
            $repository = $app->make(CustomerRepository::class);
            return CustomerInteractor::build($repository);
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
