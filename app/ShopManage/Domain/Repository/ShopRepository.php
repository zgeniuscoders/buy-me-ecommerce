<?php


namespace App\ShopManage\Domain\Repository;

use App\ShopManage\Data\Models\Shop;

interface ShopRepository{

    public function getShop(string $id): Shop;

    public function create(array $data);

    public function delete(string $id);

    public function update(string $id, array $data);

}