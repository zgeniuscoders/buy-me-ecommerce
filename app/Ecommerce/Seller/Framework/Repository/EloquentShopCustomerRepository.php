<?php

namespace App\Ecommerce\Seller\Framework\Repository;

use App\Ecommerce\Seller\Domain\Repository\ShopCustomerRepository;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class EloquentShopCustomerRepository implements ShopCustomerRepository
{

    public function getShopCustomers(int $shopId): Collection
    {
        return User::whereHas('orders.product', function ($query) use ($shopId) {
            $query->where('store_id', $shopId);
        })
            ->distinct()
            ->get();
    }

    public function getShopCustomersCount(int $shopId): int
    {
        return $this->getShopCustomers($shopId)->count();
    }
}
