<?php

namespace App\Ecommerce\Seller\Domain\Usecases\Product;

use App\Ecommerce\Products\Domain\Models\Product;
use App\Ecommerce\Products\Domain\Repository\ProductRepository;
use App\Ecommerce\Seller\Domain\Repository\ShopProductRepository;
use Illuminate\Http\Request;

readonly class UpdateProduct
{
    public function __construct(private ShopProductRepository $repository)
    {
    }

    public function run(array $data, int $productId): Product
    {
        return $this->repository->updateProduct($data,$productId);
    }
}
