<?php

namespace App\Providers;

use App\Admin\Domain\Repository\CategoryRepository;
use App\Admin\Domain\Usecases\Category\CategoryInteractor;
use App\Admin\Framework\Repository\EloquentCategoryRepository;
use Illuminate\Support\ServiceProvider;

class CategoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(CategoryRepository::class, function ($app) {
            return new EloquentCategoryRepository();
        });

        $this->app->singleton(CategoryInteractor::class, function ($app) {
            $repository = $app->make(CategoryRepository::class);
            return CategoryInteractor::build($repository);
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
