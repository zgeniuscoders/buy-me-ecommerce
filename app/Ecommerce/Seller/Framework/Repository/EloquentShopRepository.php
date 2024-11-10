<?php

namespace App\Ecommerce\Seller\Framework\Repository;

use App\Ecommerce\Seller\Domain\Repository\ShopRepository;
use App\Ecommerce\Seller\Framework\Requests\ShopRequest;
use App\Ecommerce\Seller\Framework\Requests\UpdateShopImageRequest;
use App\Ecommerce\Seller\Framework\Requests\UpdateShopInfoRequest;
use App\Ecommerce\Shop\Domain\Models\Store;
use Illuminate\Support\Str;

class EloquentShopRepository implements ShopRepository
{

    public function getShop(int $shopId): Store
    {
        return Store::findOrFail($shopId);
    }

    public function addShop(array $data): Store
    {
        return Store::create($data);
    }

    public function updateShop(array $data, int $shopId): Store
    {
        $shop = Store::findOrFail($shopId);
        $shop->update($data);
        return $shop;
    }

    public function updateShopImage(array $data, int $shopId): Store
    {
        // TODO: Implement updateShopImage() method.
    }

    public function removeShop(int $shopId): void
    {
        $shop = Store::findOrFail($shopId);
        $shop->delete();
    }

    public function disableShop(int $shopId): void
    {
        $store = Store::findOrFail($shopId);
        $store->update([
            "is_disabled" => true
        ]);
    }

    public function enableShop(int $shopId): void
    {
        $store = Store::findOrFail($shopId);
        $store->update([
            "is_disabled" => false
        ]);
    }
}
