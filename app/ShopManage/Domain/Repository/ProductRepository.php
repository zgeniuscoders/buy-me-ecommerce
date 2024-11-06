<?php

namespace App\ShopManage\Domain\Repository;

use App\Models\Product;

interface ProductRepository
{
    public function getProduct(string $id): Product;

    public function getAllProduct(string $shopId);

    public function create(array $data): Product;

    public function delete(string $id);

    public function update(string $id, array $data);
}
