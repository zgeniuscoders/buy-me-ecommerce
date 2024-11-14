<?php

namespace App\Ecommerce\Seller\Domain\Usecases\Product;

use App\Ecommerce\Seller\Domain\Repository\ShopProductRepository;

class ShopProductInteractor
{

    public function __construct(
        public GetShopProducts $getShopProducts,
        public GetProduct $getProduct,
        public AddProduct $addProduct,
        public RemoveProduct $removeProduct,
        public UpdateProduct $updateProduct
    )
    {
    }

    static public function build(ShopProductRepository $repository): ShopProductInteractor
    {
        return new ShopProductInteractor(
            new GetShopProducts($repository),
            new GetProduct($repository),
            new AddProduct($repository),
            new RemoveProduct($repository),
            new UpdateProduct($repository)
        );
    }
}
