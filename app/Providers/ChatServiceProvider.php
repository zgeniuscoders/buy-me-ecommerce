<?php

namespace App\Providers;

use App\Ecommerce\Chat\Domain\Repository\ChatListRepository;
use App\Ecommerce\Chat\Domain\Repository\ChatRepository;
use App\Ecommerce\Chat\Domain\Usecases\ChatInteractor;
use App\Ecommerce\Chat\Domain\Usecases\ChatListInteractor;
use App\Ecommerce\Chat\Framework\Repository\EloquentChatListRepository;
use Illuminate\Support\ServiceProvider;

class ChatServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ChatRepository::class, function ($app) {
            return new EloquentChatListRepository();
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
