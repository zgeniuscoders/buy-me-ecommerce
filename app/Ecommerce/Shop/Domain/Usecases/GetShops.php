<?php

namespace App\Ecommerce\Shop\Domain\Usecases;

use App\Ecommerce\Shop\Domain\Repository\ShopRepository;

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
