<?php

namespace App\Ecommerce\Seller\Domain\Usecases\shop;

use App\Ecommerce\Seller\Domain\Repository\ShopRepository;

class ShopInteractor
{

    public function __construct(
        public AddShop         $addShop,
        public DisableShop     $disableShop,
        public EnableShop      $enableShop,
        public GetShop         $getShop,
        public RemoveShop      $removeShop,
        public UpdateShop      $updateShop,
        public UpdateShopImage $updateShopImage
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
            new RemoveShop($repository),
            new UpdateShop($repository),
            new UpdateShopImage($repository)
        );
    }
}
