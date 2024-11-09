<?php

namespace App\Ecommerce\Products\Domain\Repository;

use App\Ecommerce\Products\Domain\Models\Product;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Http\Request;

interface ProductRepository
{

    public function getProducts(): Collection;

    public function getProduct(int $productId): Product;

}
