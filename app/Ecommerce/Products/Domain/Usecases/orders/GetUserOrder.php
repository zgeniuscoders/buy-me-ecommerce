<?php

namespace App\Ecommerce\Products\Domain\Usecases\orders;

use App\Ecommerce\Products\Domain\Models\Order;
use App\Ecommerce\Products\Domain\Repository\OrderRepository;

class GetUserOrder
{

    public function __construct(private OrderRepository $repository)
    {
    }

    public function run(int $userId): Order
    {
        return $this->repository->getUserOrders($userId);
    }

}
