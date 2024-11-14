<?php

namespace App\Profile\Domain\Usecases\orders;

use App\Profile\Domain\Models\Order;
use App\Profile\Domain\Repository\OrderRepository;

readonly class MarkAsDelivered
{

    public function __construct(private OrderRepository $repository)
    {
    }

    public function run(int $orderId): Order
    {
        return $this->repository->markAsDelivered($orderId);
    }
}
