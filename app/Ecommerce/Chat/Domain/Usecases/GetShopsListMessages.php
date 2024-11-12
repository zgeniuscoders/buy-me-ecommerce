<?php

namespace App\Ecommerce\Chat\Domain\Usecases;

use App\Ecommerce\Chat\Domain\Repository\ChatListRepository;
use App\Ecommerce\Chat\Domain\Repository\ChatRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class GetShopsListMessages
{

    public function __construct(private ChatListRepository $repository)
    {
    }

    public function run(int $userId):Collection
    {
        return $this->repository->getShopsListMessages($userId);
    }

}
