<?php

namespace App\Ecommerce\Seller\Domain\Usecases;

use App\Ecommerce\Seller\Domain\Repository\ShopRepository;
use App\Ecommerce\Seller\Framework\Requests\UpdateShopInfoRequest;
use App\Ecommerce\Shop\Domain\Models\Store;

class UpdateShop
{

    public function __construct(private ShopRepository $repository)
    {
    }

    public function run(UpdateShopInfoRequest $request,int $shopId): Store
    {
        return $this->repository->updateShop($request,$shopId);
    }

}
