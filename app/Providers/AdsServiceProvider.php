<?php

namespace App\Providers;

use App\Admin\Domain\Repository\AdsRepository;
use App\Admin\Domain\Usecases\Ads\AdsInteractor;
use App\Admin\Framework\Repository\EloquentAdsRepository;
use Illuminate\Support\ServiceProvider;

class AdsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(AdsRepository::class,function ($app){
            return new EloquentAdsRepository();
        });

        $this->app->singleton(AdsInteractor::class,function ($app){
            $repository = $app->make(AdsRepository::class);
            return AdsInteractor::build($repository);
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
