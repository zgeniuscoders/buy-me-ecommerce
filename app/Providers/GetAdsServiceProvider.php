<?php

namespace App\Providers;

use App\Core\Domain\Repository\GetAdsRepository;
use App\Core\Domain\Usecases\GetAdsInteractor;
use App\Core\Framework\Repository\EloquentGetAdsRepository;
use Illuminate\Support\ServiceProvider;

class GetAdsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(GetAdsRepository::class,function($app){
            return new EloquentGetAdsRepository();
        });

        $this->app->singleton(GetAdsInteractor::class,function($app){
            $repository = $app->make(GetAdsRepository::class);
            return GetAdsInteractor::build($repository);
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
