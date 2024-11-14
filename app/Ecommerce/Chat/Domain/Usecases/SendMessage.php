<?php

namespace App\Ecommerce\Chat\Domain\Usecases;

use App\Ecommerce\Chat\Domain\Repository\ChatRepository;

readonly class SendMessage
{

    public function __construct(private ChatRepository $repository)
    {
    }

    public function run(array $data): void
    {
        $this->repository->sendMessage($data);
    }

}
