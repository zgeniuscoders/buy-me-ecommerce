<?php


namespace App\ShopManage\Data\Repository;

use App\Models\Order;
use App\ShopManage\Domain\Repository\OrderRepository;

class CustomerRepositoryImpl implements OrderRepository
{

    public function getOrders(string $shopId)
    {
        $orders = Order::whereHas('product', function ($query) use ($shopId) {
            $query->where('store_id', $shopId);
        })->with(["product", "customer"])->get();
        
    }

    public function getOrder(string $orderId): Order
    {
        return Order::findOrFail($orderId);
    }

    public function updateOrderStatus(string $orderId, array $data)
    {
        $order = Order::findOrFail($orderId);
        $order->update($order);
    }
}
