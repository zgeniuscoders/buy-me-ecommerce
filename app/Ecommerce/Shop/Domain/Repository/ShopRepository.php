<?php

namespace App\Ecommerce\Shop\Domain\Repository;

use App\Ecommerce\Shop\Domain\Models\Store;
use App\Http\Requests\StoreRequest;
use App\Http\Requests\UpdateShopImageRequest;
use App\Http\Requests\UpdateShopInfoRequest;
use Illuminate\Http\Request;

interface ShopRepository
{

    public function getShops();

    public function getShop(int $shopId): Store;

    public function addShop(StoreRequest $request): Store;

    public function updateShop(UpdateShopInfoRequest $request,int $shopId): Store;

    public function updateShopImage(UpdateShopImageRequest $request,int $shopId): Store;

    public function removeShop(int $shopId);

    public function disableShop(int $shopId);

    public function enableShop(int $shopId);

}
