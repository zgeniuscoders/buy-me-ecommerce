<?php

namespace App\Ecommerce\Chat\Domain\Repository;

use Illuminate\Database\Eloquent\Collection;

interface ChatListRepository
{

    public function getUsersListMessages(int $shopId): Collection;

    public function getShopsListMessages(int $userId): Collection;

}
