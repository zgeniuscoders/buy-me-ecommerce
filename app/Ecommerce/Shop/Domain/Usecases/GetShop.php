<?php

namespace App\Ecommerce\Shop\Domain\Usecases;

use App\Ecommerce\Shop\Domain\Models\Store;
use App\Ecommerce\Shop\Domain\Repository\ShopRepository;

class GetShop
{

    public function __construct(private ShopRepository $repository)
    {
    }

    public function run(int $shopId): Store
    {
        return $this->repository->getShop($shopId);
    }

}
