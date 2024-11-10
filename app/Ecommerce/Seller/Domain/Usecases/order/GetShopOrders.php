<?php

namespace App\Ecommerce\Seller\Domain\Usecases\order;

use App\Ecommerce\Seller\Domain\Repository\ShopOrderRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class GetShopOrders
{

    public function __construct(private ShopOrderRepository $repository)
    {
    }

    public function  run(int $shopId): Collection
    {
        return $this->repository->getShopOrders($shopId);
    }

}
