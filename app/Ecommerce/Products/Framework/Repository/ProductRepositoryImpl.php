<?php

namespace App\Ecommerce\Products\Framework\Repository;

use App\Ecommerce\Products\Domain\Models\Product;
use App\Ecommerce\Products\Domain\Repository\ProductRepository;
use Illuminate\Http\Request;

class ProductRepositoryImpl implements ProductRepository
{

    public function getProducts()
    {
        // TODO: Implement getProducts() method.
    }

    public function getProduct(int $productId): Product
    {
        // TODO: Implement getProduct() method.
    }

    public function addProduct(Request $request): Product
    {
        // TODO: Implement addProduct() method.
    }

    public function updateProduct(Request $request, int $productId): Product
    {
        // TODO: Implement updateProduct() method.
    }

    public function removeProduct(int $productId): void
    {
        // TODO: Implement removeProduct() method.
    }
}
