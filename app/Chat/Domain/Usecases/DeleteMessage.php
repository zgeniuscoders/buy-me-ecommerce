<?php

namespace App\Chat\Domain\Usecases;

use App\Chat\Domain\Repository\ChatRepository;

readonly class DeleteMessage
{

    public function __construct(private ChatRepository $repository)
    {
    }


    public function run(int $messageId): void
    {
        $this->repository->deleteMessage($messageId);
    }

}
