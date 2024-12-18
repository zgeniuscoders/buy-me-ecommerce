<?php

namespace App\Ecommerce\Products\Domain\Usecases\products;

use App\Ecommerce\Products\Domain\Repository\ProductRepository;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Collection;

readonly class GetProducts
{
    public function __construct(private ProductRepository $repository)
    {
    }

    public function run(Authenticatable|null $user, string|null $sortedCategory = null): \Illuminate\Contracts\Pagination\LengthAwarePaginator
    {
        return $this->repository->getProducts($user, $sortedCategory);
    }

}
