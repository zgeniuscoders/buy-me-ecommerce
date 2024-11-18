<?php

namespace App\Chat\Domain\Usecases;

use App\Chat\Domain\Repository\ChatRepository;

readonly class SendMessage
{

    public function __construct(private ChatRepository $repository)
    {
    }

    public function run(array $data): \App\Models\Message
    {
        return $this->repository->sendMessage($data);
    }

}
