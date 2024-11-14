<?php

namespace App\Ecommerce\Chat\Domain\Usecases;

use App\Ecommerce\Chat\Domain\Repository\ChatRepository;

readonly class RemoveMessage
{
    public function __construct(private ChatRepository $repository)
    {
    }

    public function run(int $messageId): \Ramsey\Collection\Collection
    {
        return $this->repository->removeMessages($messageId);
    }
}
