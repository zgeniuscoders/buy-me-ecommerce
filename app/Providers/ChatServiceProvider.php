<?php

namespace App\Providers;


use App\Chat\Domain\Repository\ChatRepository;
use App\Chat\Domain\Usecases\ChatInteractor;
use App\Chat\Framework\Repository\EloquentChatRepository;
use Illuminate\Support\ServiceProvider;

class ChatServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ChatRepository::class, function ($app) {
            return new EloquentChatRepository();
        });

        $this->app->singleton(ChatInteractor::class, function ($app) {
            $repository = $app->make(ChatRepository::class);
            return ChatInteractor::build($repository);
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
