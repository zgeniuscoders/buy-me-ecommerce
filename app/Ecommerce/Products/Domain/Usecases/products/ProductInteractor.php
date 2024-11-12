<?php

namespace App\Ecommerce\Products\Domain\Usecases\products;

use App\Ecommerce\Products\Domain\Repository\ProductRepository;
use App\Ecommerce\Seller\Domain\Usecases\Product\AddProduct;
use App\Ecommerce\Seller\Domain\Usecases\Product\RemoveProduct;
use App\Ecommerce\Seller\Domain\Usecases\Product\UpdateProduct;

class ProductInteractor
{

    public function __construct(
        public GetProducts    $getProducts,
        public GetProduct     $getProduct,
        public GetNewArrivals $getNewArrivals,
        public GetProductsByCategory $getProductsByCategory
    )
    {
    }

    static public function build(ProductRepository $repository): ProductInteractor
    {
        return new ProductInteractor(
            new GetProducts($repository),
            new GetProduct($repository),
            new GetNewArrivals($repository),
            new GetProductsByCategory($repository)
        );
    }
}
