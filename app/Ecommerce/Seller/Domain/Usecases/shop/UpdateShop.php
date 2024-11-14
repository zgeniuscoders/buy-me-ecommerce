<?php

namespace App\Ecommerce\Seller\Domain\Usecases\shop;

use App\Ecommerce\Seller\Domain\Repository\ShopRepository;
use App\Ecommerce\Seller\Framework\Requests\UpdateShopInfoRequest;
use App\Ecommerce\Shop\Domain\Models\Store;

readonly class UpdateShop
{

    public function __construct(private ShopRepository $repository)
    {
    }

    public function run(array $data,int $shopId): Store
    {
        return $this->repository->updateShop($data,$shopId);
    }

}
