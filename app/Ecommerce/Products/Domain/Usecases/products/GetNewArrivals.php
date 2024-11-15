<?php

namespace App\Ecommerce\Products\Domain\Usecases\products;

use App\Ecommerce\Products\Domain\Repository\ProductRepository;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

readonly class GetNewArrivals
{
    public function __construct(private ProductRepository $repository)
    {
    }

    public function run(Authenticatable|null $user, string|null $sortedCategory = null): LengthAwarePaginator
    {
        return $this->repository->getNewArrivals($user, $sortedCategory);
    }

}
