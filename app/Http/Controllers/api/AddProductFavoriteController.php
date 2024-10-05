<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProductResource;
use App\Models\Product;
use Illuminate\Http\Request;

class AddProductFavoriteController extends Controller
{
    public function __invoke(Request $request)
    {
        $shop = Product::withCount("favoriteProductUser")
            ->findOrFail($request->productId);

        $shop->favoriteProductUser()->toggle([
            request()->user()->id
        ]);

        return new ProductResource($shop);
    }
}
