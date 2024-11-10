<?php

namespace App\Ecommerce\Seller\Domain\Repository;

use Illuminate\Database\Eloquent\Collection;

interface ShopCustomerRepository
{
    public function getShopCustomers(int $shopId): Collection;

    public function getShopCustomersCount(int $shopId): int;
}
