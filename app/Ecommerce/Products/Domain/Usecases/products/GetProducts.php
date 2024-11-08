<?php

namespace App\Ecommerce\Products\Domain\Usecases\products;

use App\Ecommerce\Products\Domain\Repository\ProductRepository;

class GetProducts
{
    public function __construct(private ProductRepository $repository)
    {
    }

    public  function getProducts(){
        return $this->repository->getProducts();
    }

}
