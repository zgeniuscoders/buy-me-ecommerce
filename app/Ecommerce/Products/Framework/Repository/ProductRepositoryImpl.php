<?php

namespace App\Ecommerce\Products\Framework\Repository;

use App\Core\Domain\Models\Category;
use App\Ecommerce\Products\Domain\Models\Product;
use App\Ecommerce\Products\Domain\Repository\ProductRepository;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use Illuminate\Database\Eloquent\Collection;

class ProductRepositoryImpl implements ProductRepository
{

    public function getProducts(Authenticatable $user, string|null $sortedCategory = null): LengthAwarePaginator
    {
        $products = Product::with("favoriteProductUser")->paginate(20);
        return $this->userProductFavorite($products, $user);
    }

    public function getProduct(int $productId): Product
    {
        return Product::findOrFail($productId);
    }

    public function addProduct(array $data): Product
    {
        return Product::create($data);
    }

    public function updateProduct(array $data, int $productId): Product
    {
        $product = Product::findOrFail($productId);
        $product->update($data);
        return $product;
    }

    public function removeProduct(int $productId): void
    {
        $product = Product::findOrFail($productId);
        $product->delete();
    }

    public function getNewArrivals(Authenticatable $user, string|null $sortedCategory = null): LengthAwarePaginator
    {
        $products = Product::orderBy('created_at', 'desc')->paginate(20);
        return $this->userProductFavorite($products, $user);
    }

    /**
     * @param LengthAwarePaginator $products
     * @param Authenticatable $user
     * @return mixed
     */
    public function userProductFavorite(LengthAwarePaginator $products, Authenticatable $user)
    {
        $products->getCollection()->transform(function ($product) use ($user) {
            $product->isFavorited = $product->favoriteProductUser->contains('id', $user->id);
            return $product;
        });

        // Vérification des favoris pour l'utilisateur
        if ($user) {
            $products->getCollection()->transform(function ($product) use ($user) {
                $product->isFavorited = $product->favoriteProductUser->contains('id', $user->id);
                return $product;
            });
        } else {
            // Si l'utilisateur n'est pas connecté, on définit isFavorited à false
            $products->getCollection()->transform(function ($product) {
                $product->isFavorited = false;
                return $product;
            });
        }

        return $products;
    }

    public function getProductsByCategory(int $categoryId, Authenticatable $user): Collection
    {
        return Product::where("category_id", $categoryId)
            ->take(8)
            ->get();
    }
}
