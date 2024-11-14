<?php

namespace App\Ecommerce\Seller\Framework\Repository;

use App\Ecommerce\Products\Domain\Models\Product;
use App\Ecommerce\Products\Domain\Repository\ProductRepository;
use App\Ecommerce\Seller\Domain\Repository\ShopProductRepository;
use Illuminate\Database\Eloquent\Collection;

class EloquentShopProductRepository implements ShopProductRepository
{

    public function addProduct(array $data): Product
    {
        return Product::create($data);
    }

    public function updateProduct(array $data, int $productId): Product
    {
        $product = Product::findOrFail($productId);
        $product->update($data);
        return $product;
    }

    public function removeProduct(int $productId): void
    {
        $product = Product::findOrFail($productId);
        $product->delete();
    }

    public function getShopProduct(int $shopId): Collection
    {
        return Product::with(['Category'])
            ->where("store_id", $shopId)
            ->get();
    }

    public function getProduct(int $productId): Product
    {
        return Product::findOrFail($productId);
    }
}
