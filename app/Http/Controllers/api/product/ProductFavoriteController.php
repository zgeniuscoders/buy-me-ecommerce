<?php

namespace App\Http\Controllers\api\product;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductFavoriteResource;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use App\Models\User;
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
            "favoriteProducts.category",
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
