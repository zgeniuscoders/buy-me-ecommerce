<?php

namespace App\Profile\Domain\Usecases\orders;

use App\Profile\Domain\Models\Order;
use App\Profile\Domain\Repository\OrderRepository;

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
