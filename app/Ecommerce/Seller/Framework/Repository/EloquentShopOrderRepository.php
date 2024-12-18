<?php

namespace App\Ecommerce\Seller\Framework\Repository;

use App\Ecommerce\Seller\Domain\Repository\ShopOrderRepository;
use App\Profile\Domain\Models\Order;
use Illuminate\Database\Eloquent\Collection;

class EloquentShopOrderRepository implements ShopOrderRepository
{

    public function getShopOrders(int $shopId): Collection
    {
        return Order::whereHas('product', function ($query) use ($shopId) {
            $query->where('store_id', $shopId);
        })->with(["product", "Customer"])->get();
    }

    public function getShopTotalOrderPrice(int $shopId): int
    {
        return Order::whereHas('product', function ($query) use ($shopId) {
            $query->where('store_id', $shopId);
        })->with('product')->get()->sum(function ($order) {
            return $order->product->price * $order->quantity;
        });
    }
}
