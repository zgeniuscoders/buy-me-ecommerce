<?php


namespace App\ShopManage\Data\Repository;

use App\Models\Product;
use App\ShopManage\Domain\Repository\ProductRepository;

class ShopRepositoryImpl implements ProductRepository
{

    public function getProduct(string $id): Product
    {
        return Product::findOrFail($id);
    }

    public function getAllProduct(string $shopId)
    {
        $products = Product::where("store_id", $shopId)
            ->get();
    }

    public function create(array $data): Product
    {
        return Product::create($data);
    }

    public function delete(string $id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
    }

    public function update(string $id, array $data)
    {
        $product = Product::findOrFail($id);
        $product->update($data);
    }
}
