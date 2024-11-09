<?php

namespace App\Ecommerce\Seller\Domain\Usecases\Product;

use App\Ecommerce\Products\Domain\Models\Product;
use App\Ecommerce\Seller\Domain\Repository\ShopProductRepository;
use Illuminate\Http\Request;

readonly class AddProduct
{

    public function __construct(private ShopProductRepository $repository)
    {
    }

    public function run(array $data): Product
    {
        return $this->repository->addProduct($data);
    }
}
