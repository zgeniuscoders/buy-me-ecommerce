<?php

namespace App\Ecommerce\Products\Domain\Usecases\orders;

use App\Ecommerce\Products\Domain\Repository\OrderRepository;
use App\Profile\Domain\Models\Order;

readonly class AddOrder
{
    public function __construct(private OrderRepository $repository)
    {
    }

    public function run(array $data): Order
    {
        return $this->repository->addOrder($data);
    }
}
