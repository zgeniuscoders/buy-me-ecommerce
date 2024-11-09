<?php

namespace App\Ecommerce\Seller\Domain\Repository;

use App\Ecommerce\Seller\Framework\Requests\ShopRequest;
use App\Ecommerce\Seller\Framework\Requests\UpdateShopImageRequest;
use App\Ecommerce\Seller\Framework\Requests\UpdateShopInfoRequest;
use App\Ecommerce\Shop\Domain\Models\Store;

interface ShopRepository
{

    public function getShops();

    public function getShop(int $shopId): Store;

    public function addShop(ShopRequest $request): Store;

    public function updateShop(UpdateShopInfoRequest $request,int $shopId): Store;

    public function updateShopImage(UpdateShopImageRequest $request,int $shopId): Store;

    public function removeShop(int $shopId);

    public function disableShop(int $shopId);

    public function enableShop(int $shopId);

}
