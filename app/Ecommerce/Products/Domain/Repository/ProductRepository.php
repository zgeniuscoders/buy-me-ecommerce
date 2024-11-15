<?php

namespace App\Ecommerce\Products\Domain\Repository;

use App\Ecommerce\Products\Domain\Models\Product;
use App\Models\User;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

interface ProductRepository
{

    public function addProduct(array $data): Product;

    public function updateProduct(array $data, int $productId): Product;

    public function removeProduct(int $productId): void;

    public function getProductsByCategory(int $categoryId, Authenticatable|null $user): Collection;

    public function getNewArrivals(Authenticatable|null $user, string|null $sortedCategory = null): LengthAwarePaginator;

    public function getProducts(Authenticatable|null $user, string|null $sortedCategory = null): LengthAwarePaginator;

    public function getProduct(int $productId): Product;

}
