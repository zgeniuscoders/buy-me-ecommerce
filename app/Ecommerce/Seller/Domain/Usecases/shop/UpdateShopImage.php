<?php

namespace App\Ecommerce\Seller\Domain\Usecases\shop;

use App\Ecommerce\Seller\Domain\Repository\ShopRepository;
use App\Ecommerce\Seller\Framework\Requests\UpdateShopImageRequest;
use App\Ecommerce\Shop\Domain\Models\Store;

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
