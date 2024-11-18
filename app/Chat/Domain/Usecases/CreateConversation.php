<?php

namespace App\Chat\Domain\Usecases;

use App\Chat\Domain\Repository\ChatRepository;

readonly class CreateConversation
{

    public function __construct(private ChatRepository $repository)
    {
    }

    public function run(int $senderId, int $receiverId): \App\Models\Conversation
    {
        return $this->repository->createConversation($senderId, $receiverId);
    }

}
