<?php

namespace App\Providers;

use App\Admin\Domain\Repository\PermissionRepository;
use App\Admin\Domain\Usecases\Permission\PermissionInteractor;
use App\Admin\Framework\Repository\EloquentPermissionRepository;
use Illuminate\Support\ServiceProvider;

class PermissionServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(PermissionRepository::class, function ($app) {
            return new EloquentPermissionRepository();
        });

        $this->app->singleton(PermissionInteractor::class, function ($app) {
            $repository = $app->make(PermissionRepository::class);
            return PermissionInteractor::build($repository);
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
