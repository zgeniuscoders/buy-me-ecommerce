<?php

namespace App\Ecommerce\Products\Domain\Usecases\orders;

use App\Ecommerce\Products\Domain\Repository\OrderRepository;
use App\Profile\Domain\Models\Order;

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
