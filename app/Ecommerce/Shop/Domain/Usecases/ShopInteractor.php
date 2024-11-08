<?php

namespace App\Ecommerce\Shop\Domain\Usecases;

use App\Ecommerce\Shop\Domain\Repository\ShopRepository;

class ShopInteractor
{

    public function __construct(
        private AddShop $addShop,
        private DisableShop $disableShop,
        private EnableShop $enableShop,
        private GetShop $getShop,
        private GetShops $getShops,
        private RemoveShop $removeShop,
        private UpdateShop $updateShop,
        private UpdateShopImage $updateShopImage
    )
    {
    }

    static public function build(ShopRepository $repository): ShopInteractor
    {
        return new ShopInteractor(
          new AddShop($repository),
          new DisableShop($repository),
          new EnableShop($repository),
            new GetShop($repository),
            new GetShops($repository),
            new RemoveShop($repository),
            new UpdateShop($repository),
            new UpdateShopImage($repository)
        );
    }
}
