<?php

namespace App\Ecommerce\Seller\Domain\Repository;

use Illuminate\Database\Eloquent\Collection;

interface ShopOrderRepository
{

    public function getShopOrders(int $shopId): Collection;

    public function getShopTotalOrderPrice(int $shopId): int;

}
