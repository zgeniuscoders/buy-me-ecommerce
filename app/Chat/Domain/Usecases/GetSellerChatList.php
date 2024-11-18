<?php

namespace App\Chat\Domain\Usecases;

use App\Chat\Domain\Repository\ChatRepository;

readonly class GetSellerChatList
{

    public function __construct(private ChatRepository $repository)
    {
    }


    public function run(int $customerId): \Illuminate\Database\Eloquent\Collection
    {
        return $this->repository->getSellerChatList($customerId);
    }

}
