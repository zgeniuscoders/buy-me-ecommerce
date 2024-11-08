<?php

namespace App\Ecommerce\Shop\Domain\Usecases;

use App\Ecommerce\Shop\Domain\Repository\ShopRepository;

class RemoveShop
{

    public function __construct(private ShopRepository $repository)
    {
    }

    public function run(int $shopId): void
    {
        $this->repository->removeShop($shopId);
    }

}
