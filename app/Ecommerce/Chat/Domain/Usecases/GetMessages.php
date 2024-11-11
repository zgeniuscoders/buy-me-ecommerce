<?php

namespace App\Ecommerce\Chat\Domain\Usecases;

use App\Ecommerce\Chat\Domain\Repository\ChatRepository;

readonly class GetMessages
{

    public function __construct(private ChatRepository $repository)
    {
    }

    public function run(int $userId): \Ramsey\Collection\Collection
    {
        return $this->repository->getMessages($userId);
    }

}
