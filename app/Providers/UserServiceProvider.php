<?php

namespace App\Providers;

use App\Admin\Domain\Repository\UserRepository;
use App\Admin\Domain\Usecases\User\UserInteractor;
use App\Admin\Framework\Repository\EloquentUserRepository;
use Illuminate\Support\ServiceProvider;

class UserServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(UserRepository::class, function ($app) {
            return new EloquentUserRepository();
        });

        $this->app->singleton(UserInteractor::class, function ($app) {
            $repository = $app->make(UserRepository::class);
            return UserInteractor::build($repository);
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
