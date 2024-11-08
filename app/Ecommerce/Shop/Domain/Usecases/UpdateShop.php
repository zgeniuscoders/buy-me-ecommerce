<?php

namespace App\Ecommerce\Shop\Domain\Usecases;

use App\Ecommerce\Shop\Domain\Models\Store;
use App\Ecommerce\Shop\Domain\Repository\ShopRepository;
use App\Http\Requests\UpdateShopInfoRequest;

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
