<?php

namespace App\Ecommerce\Products\Domain\Repository;

use App\Profile\Domain\Models\Order;
use Illuminate\Database\Eloquent\Collection;

interface OrderRepository
{

    public function getOrder(int $orderId): Order;

    public function getUserOrders(int $userId): Collection;

    public function addOrder(array $data): Order;

    public function cancelOrder(int $orderId): Order;

    public function markAsDelivered(int $orderId): Order;

}
