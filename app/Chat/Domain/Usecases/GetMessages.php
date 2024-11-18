<?php

namespace App\Chat\Domain\Usecases;

use App\Chat\Domain\Repository\ChatRepository;

readonly class GetMessages
{

    public function __construct(private ChatRepository $repository)
    {
    }

    public function run(int $senderId, int $receiverId): \Illuminate\Database\Eloquent\Collection
    {
        return $this->repository->getMessages($senderId, $receiverId);
    }

}
