<?php

namespace App\Ecommerce\Products\Domain\Usecases\orders;

use App\Ecommerce\Products\Domain\Repository\OrderRepository;
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
