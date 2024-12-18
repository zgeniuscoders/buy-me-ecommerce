<?php

namespace App\Ecommerce\Shop\Framework\Repository;

use App\Ecommerce\Seller\Domain\Repository\ShopRepository;
use App\Ecommerce\Seller\Framework\Requests\ShopRequest;
use App\Ecommerce\Seller\Framework\Requests\UpdateShopImageRequest;
use App\Ecommerce\Shop\Domain\Models\Store;
use Illuminate\Http\Request;

class ShopRepositoryImpl implements ShopRepository
{

    public function getShops()
    {
        // TODO: Implement getShops() method.
    }

    public function getShop(int $shopId): Store
    {
        // TODO: Implement getShop() method.
    }

    public function addShop(ShopRequest $request): Store
    {
        // TODO: Implement addShop() method.
    }

    public function updateShop(Request $request, int $shopId): Store
    {
        // TODO: Implement updateShop() method.
    }

    public function removeShop(int $shopId)
    {
        // TODO: Implement removeShop() method.
    }

    public function disableShop(int $shopId)
    {
        // TODO: Implement disableShop() method.
    }

    public function enableShop(int $shopId)
    {
        // TODO: Implement enableShop() method.
    }

    public function updateShopImage(UpdateShopImageRequest $request, int $shopId): Store
    {
        // TODO: Implement updateShopImage() method.
    }
}
