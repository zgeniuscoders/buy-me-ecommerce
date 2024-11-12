<?php

namespace App\Providers;

use App\Ecommerce\Products\Domain\Repository\ProductRepository;
use App\Ecommerce\Products\Domain\Usecases\products\ProductInteractor;
use App\Ecommerce\Products\Framework\Repository\ProductRepositoryImpl;
use App\Ecommerce\Seller\Domain\Repository\ShopProductRepository;
use App\Ecommerce\Seller\Framework\Repository\EloquentShopProductRepository;
use Illuminate\Support\ServiceProvider;

class ProductServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ProductRepository::class, function ($app) {
            return new ProductRepositoryImpl();
        });

        $this->app->singleton(ProductInteractor::class, function ($app) {
            $repository = $app->make(ProductRepository::class);
            return ProductInteractor::build($repository);
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
