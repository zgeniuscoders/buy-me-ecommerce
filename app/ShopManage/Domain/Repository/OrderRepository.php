<?php

namespace App\ShopManage\Domain\Repository;

use App\Models\Order;

interface OrderRepository
{
    public function getOrders(string $shopId);

    public function getOrder(string $orderId): Order;

    public function updateOrderStatus(string $orderId, array $data);
}
