<?php

namespace App\Ecommerce\Seller\Domain\Usecases\shop;

use App\Ecommerce\Seller\Domain\Repository\ShopRepository;
use App\Ecommerce\Shop\Domain\Models\Store;

readonly class GetShop
{

    public function __construct(private ShopRepository $repository)
    {
    }

    public function run(int $shopId): Store
    {
        return $this->repository->getShop($shopId);
    }

}
