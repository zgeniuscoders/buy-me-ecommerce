<?php

namespace App\Chat\Domain\Usecases;

use App\Chat\Domain\Repository\ChatRepository;

readonly class GetCustomerChatList
{


    public function __construct(private ChatRepository $repository)
    {
    }


    public function run(int $shopId): \Illuminate\Database\Eloquent\Collection
    {
        return $this->repository->getCustomerChatList($shopId);
    }


}
