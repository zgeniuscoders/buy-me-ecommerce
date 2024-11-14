<?php

namespace App\Ecommerce\Products\Domain\Usecases\products;

use App\Ecommerce\Products\Domain\Repository\ProductRepository;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;

readonly class GetProductsByCategory
{
    public function __construct(private ProductRepository $repository)
    {
    }

    public function run(int $categoryId, Authenticatable $user): \Illuminate\Database\Eloquent\Collection
    {
        return $this->repository->getProductsByCategory($categoryId, $user);
    }
}
