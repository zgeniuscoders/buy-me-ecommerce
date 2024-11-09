<?php

namespace App\Ecommerce\Seller\Domain\Repository;

use App\Ecommerce\Products\Domain\Models\Product;
use Illuminate\Database\Eloquent\Collection;

interface ShopProductRepository
{
    public function getProduct(int $productId): Product;

    public function getShopProduct(int $shopId): Collection;

    public function addProduct(array $data): Product;

    public function updateProduct(array $data, int $productId): Product;

    public function removeProduct(int $productId): void;
}
