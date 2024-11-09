<?php

namespace App\Profile\Framework\Repository;

use App\Profile\Domain\Enums\OrderStatusEnum;
use App\Profile\Domain\Models\Order;
use App\Profile\Domain\Repository\OrderRepository;

class EloquentOrderRepository implements OrderRepository
{

    public function getOrder(int $orderId): Order
    {
        return Order::findOrFail($orderId);
    }

    public function getUserOrders(int $userId): \Illuminate\Database\Eloquent\Collection
    {
        return Order::where("user_id", $userId)
            ->with(["product", "product.store"])
            ->get();
    }

    public function addOrder(array $data): Order
    {
        return Order::create($data);
    }


    public function cancelOrder(int $orderId): Order
    {
        $order = $this->getOrder($orderId);
        $order->update([
            "status" => OrderStatusEnum::CANCELED->value
        ]);

        return $order;
    }

    public function markAsDelivered(int $orderId): Order
    {
        $order = $this->getOrder($orderId);
        $order->update([
            "status" => OrderStatusEnum::COMPLETED->value
        ]);

        return $order;
    }
}
