<?php

namespace App\Ecommerce\Seller\Domain\Usecases\shop;

use App\Ecommerce\Seller\Domain\Repository\ShopRepository;

readonly class DisableShop
{

    public function __construct(private ShopRepository $repository)
    {
    }

    public function run(int $shopId): void
    {
        $this->repository->disableShop($shopId);
    }

}
