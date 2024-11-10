<?php

namespace App\Ecommerce\Seller\Domain\Usecases\order;

use App\Ecommerce\Seller\Domain\Repository\ShopOrderRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class GetShopTotalOrdersPrice
{

    public function __construct(private ShopOrderRepository $repository)
    {
    }

    public function  run(int $shopId): int
    {
        return $this->repository->getShopTotalOrderPrice($shopId);
    }

}
