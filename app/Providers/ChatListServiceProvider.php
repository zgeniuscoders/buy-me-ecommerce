<?php

namespace App\Providers;

use App\Admin\Domain\Repository\CategoryRepository;
use App\Admin\Domain\Usecases\Category\CategoryInteractor;
use App\Admin\Framework\Repository\EloquentCategoryRepository;
use App\Ecommerce\Chat\Domain\Repository\ChatListRepository;
use App\Ecommerce\Chat\Domain\Usecases\ChatListInteractor;
use App\Ecommerce\Chat\Framework\Repository\EloquentChatListRepository;
use Illuminate\Support\ServiceProvider;

class ChatListServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {
        $this->app->singleton(ChatListRepository::class, function ($app) {
            return new EloquentChatListRepository();
        });

        $this->app->singleton(ChatListInteractor::class, function ($app) {
            $repository = $app->make(ChatListRepository::class);
            return ChatListInteractor::build($repository);
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
