<?php

namespace App\Ecommerce\Products\Domain\Repository;

use App\Ecommerce\Products\Domain\Models\Order;
use Illuminate\Http\Request;

interface OrderRepository
{

    public function getOrder(int $orderId): Order;

    public function getUserOrders(int $userId);

    public function addOrder(Request $request): Order;

    public function updateOrder(Request $request, int $orderId): Order;

}
