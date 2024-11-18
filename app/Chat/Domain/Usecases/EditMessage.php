<?php

namespace App\Chat\Domain\Usecases;

use App\Chat\Domain\Repository\ChatRepository;

readonly class EditMessage
{

    public function __construct(private ChatRepository $repository)
    {
    }


    public function run(int $messageId, array $data): \App\Models\Message
    {
        return $this->repository->editMessage($messageId, $data);
    }

}
