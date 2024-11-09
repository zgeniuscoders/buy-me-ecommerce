<?php

namespace App\Ecommerce\Seller\Domain\Usecases\shop;

use App\Ecommerce\Seller\Domain\Repository\ShopRepository;

class GetShops
{

    public function __construct(private ShopRepository $repository)
    {
    }

    public function run()
    {
        return $this->repository->getShops();
    }

}
