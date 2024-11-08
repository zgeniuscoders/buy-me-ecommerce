<?php

namespace App\Ecommerce\Shop\Domain\Usecases;

use App\Ecommerce\Shop\Domain\Models\Store;
use App\Ecommerce\Shop\Domain\Repository\ShopRepository;
use App\Http\Requests\UpdateShopImageRequest;
use App\Http\Requests\UpdateShopInfoRequest;

class UpdateShopImage
{

    public function __construct(private readonly ShopRepository $repository)
    {
    }

    public function run(UpdateShopImageRequest $request,int $shopId): Store
    {
        return $this->repository->updateShopImage($request,$shopId);
    }

}
