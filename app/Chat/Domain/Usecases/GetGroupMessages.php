<?php

namespace App\Chat\Domain\Usecases;

use App\Chat\Domain\Repository\ChatRepository;

readonly class GetGroupMessages
{

    public function __construct(private ChatRepository $repository)
    {
    }

    public function run(int $conversationId): \Illuminate\Database\Eloquent\Collection
    {
        return $this->repository->getGroupMessages($conversationId);
    }

}
