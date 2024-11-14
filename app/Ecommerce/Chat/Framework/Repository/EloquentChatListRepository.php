<?php

namespace App\Ecommerce\Chat\Framework\Repository;

use App\Ecommerce\Chat\Domain\Repository\ChatListRepository;
use App\Models\ChatList;
use Illuminate\Database\Eloquent\Collection;

class EloquentChatListRepository implements ChatListRepository
{

    public function getUsersListMessages(int $shopId): Collection
    {
        return ChatList::with("user")
            ->where("store_id", $shopId)
            ->get();
    }

    public function getShopsListMessages(int $userId): Collection
    {
        return ChatList::with("shop")
            ->where("user_id", $userId)
            ->get();
    }
}
