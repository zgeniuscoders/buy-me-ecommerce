<?php

namespace App\Ecommerce\Shop\Domain\Usecases;

use App\Ecommerce\Shop\Domain\Models\Store;
use App\Ecommerce\Shop\Domain\Repository\ShopRepository;
use App\Http\Requests\StoreRequest;

class AddShop
{

    public function __construct(private ShopRepository $repository)
    {
    }

    public function run(StoreRequest $request): Store
    {
        return $this->repository->addShop($request);
    }

}
