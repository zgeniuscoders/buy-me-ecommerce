<?php

namespace App\Providers;

use App\Admin\Domain\Repository\RoleRepository;
use App\Admin\Domain\Usecases\Role\RoleInteractor;
use App\Admin\Framework\Repository\EloquentRoleRepository;
use Illuminate\Support\ServiceProvider;

class RoleServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(RoleRepository::class, function ($app) {
            return new EloquentRoleRepository();
        });

        $this->app->singleton(RoleInteractor::class, function ($app) {
            $repository = $app->make(RoleRepository::class);
            return RoleInteractor::build($repository);
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
