<?php

namespace App\Providers;

use App\Admin\Domain\Repository\SocialNetworkRepository;
use App\Admin\Domain\Usecases\Social\SocialNetworkInteractor;
use App\Admin\Framework\Repository\EloquentSocialNetworkRepository;
use App\Ecommerce\Seller\Domain\Repository\ShopRepository;
use App\Ecommerce\Seller\Domain\Usecases\shop\ShopInteractor;
use App\Ecommerce\Seller\Framework\Repository\EloquentShopRepository;
use Illuminate\Support\ServiceProvider;

class SocialNetworkServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(SocialNetworkRepository::class, function ($app) {
            return new EloquentSocialNetworkRepository();
        });

        $this->app->singleton(SocialNetworkInteractor::class, function ($app) {
            $repository = $app->make(SocialNetworkRepository::class);
            return SocialNetworkInteractor::build($repository);
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
