<?php

namespace App\Ecommerce\Seller\Domain\Usecases\shop;

use App\Ecommerce\Seller\Domain\Repository\ShopRepository;
use App\Ecommerce\Seller\Framework\Requests\ShopRequest;
use App\Ecommerce\Shop\Domain\Models\Store;

readonly class AddShop
{

    public function __construct(private ShopRepository $repository)
    {
    }

    public function run(array $data): Store
    {
        return $this->repository->addShop($data);
    }

}
