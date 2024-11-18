<?php

namespace App\Chat\Domain\Usecases;

use App\Chat\Domain\Repository\ChatRepository;

readonly class IsGroupParticipant
{

    public function __construct(private ChatRepository $chatRepository)
    {
    }

    public function run(int $conversationId, int $senderId): \App\Models\Conversation
    {
        return $this->chatRepository->isGroupParticipant($conversationId, $senderId);
    }

}
