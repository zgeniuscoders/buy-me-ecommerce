<?php

namespace App\Profile\Domain\Usecases\orders;

use App\Profile\Domain\Repository\OrderRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class GetUserOrder
{

    public function __construct(private OrderRepository $repository)
    {
    }

    public function run(int $userId): Collection
    {
        return $this->repository->getUserOrders($userId);
    }

}
