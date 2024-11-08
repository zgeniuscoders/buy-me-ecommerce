<?php

namespace App\Ecommerce\Products\Domain\Repository;

use App\Ecommerce\Products\Domain\Models\Product;
use Illuminate\Http\Request;

interface ProductRepository
{

    public function getProducts();

    public function getProduct(int $productId): Product;

    public function addProduct(Request $request): Product;

    public function updateProduct(Request $request, int $productId): Product;

    public function removeProduct(int $productId): void;

}
