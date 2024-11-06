<?php


namespace App\ShopManage\Data\Repository;

use App\ShopManage\Data\Models\Shop;
use App\ShopManage\Domain\Repository\ShopRepository;

class ShopRepositoryImpl implements ShopRepository
{

    public function getShop(string $id): Shop
    {
        return Shop::findOrFail($id);
    }

    public function create(array $data)
    {
        Shop::create($data);
    }

    public function delete(string $id)
    {
        $shop = Shop::findOrFail($id);
        $shop->delete();
    }

    public function update(string $id, array $data)
    {
        $shop = Shop::findOrFail($id);
        $shop->update($data);
    }
}
