<?php

namespace App\Ecommerce\Chat\Domain\Usecases;

use App\Ecommerce\Chat\Domain\Repository\ChatRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class GetMessages
{

    public function __construct(private ChatRepository $repository)
    {
    }

    public function run(int $shopId, int $userId):Collection
    {
        return $this->repository->getMessages($shopId, $userId);
    }

}
