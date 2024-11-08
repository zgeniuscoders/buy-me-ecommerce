<?php

namespace App\Ecommerce\Products\Framework\Repository;

use App\Ecommerce\Products\Domain\Models\Order;
use App\Ecommerce\Products\Domain\Repository\OrderRepository;
use Illuminate\Http\Request;

class OrderRepositoryImpl implements OrderRepository
{

    public function getOrder(int $orderId): Order
    {
        // TODO: Implement getOrder() method.
    }

    public function getUserOrders(int $userId)
    {
        // TODO: Implement getUserOrders() method.
    }

    public function addOrder(Request $request): Order
    {
        // TODO: Implement addOrder() method.
    }

    public function updateOrder(Request $request, int $orderId): Order
    {
        // TODO: Implement updateOrder() method.
    }
}
