<?php

namespace App\Ecommerce\Products\Framework\Controllers\api\products;


use App\Core\Domain\Models\User;
use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Product;
use App\Http\Resources\ProductFavoriteResource;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;

class ProductFavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = User::with([
            "favoriteProducts",
            "favoriteProducts.Category",
            "favoriteProducts.store"
        ])
            ->find(1);

        return new ProductFavoriteResource($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $shop = Product::withCount("favoriteProductUser")
            ->findOrFail($request->productId);

        $shop->favoriteProductUser()->toggle([
            request()->user()->id
        ]);

        return new ProductResource($shop);
    }
}
