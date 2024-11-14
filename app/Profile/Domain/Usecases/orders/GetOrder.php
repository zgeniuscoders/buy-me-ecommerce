<?php

namespace App\Profile\Domain\Usecases\orders;

use App\Profile\Domain\Models\Order;
use App\Profile\Domain\Repository\OrderRepository;

readonly class GetOrder
{

    public function __construct(private OrderRepository $repository)
    {
    }

    public function run(int $oderId): Order
    {
        return $this->repository->getOrder($oderId);
    }

}
