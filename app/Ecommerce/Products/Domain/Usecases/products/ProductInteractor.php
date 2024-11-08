<?php

namespace App\Ecommerce\Products\Domain\Usecases\products;

use App\Ecommerce\Products\Domain\Repository\ProductRepository;

class ProductInteractor
{

    public function __construct(
        private GetProducts $getProducts,
        private GetProduct $getProduct,
        private AddProduct $addProduct,
        private RemoveProduct $removeProduct,
        private UpdateProduct $updateProduct
    )
    {
    }

    static public function build(ProductRepository $repository): ProductInteractor
    {
        return new ProductInteractor(
            new GetProducts($repository),
            new GetProduct($repository),
            new AddProduct($repository),
            new RemoveProduct($repository),
            new UpdateProduct($repository)
        );
    }
}
