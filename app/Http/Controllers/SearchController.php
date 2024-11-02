<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $products = Product::with("favoriteProductUser");

        if ($request->has("q")) {
            $searchQuery = $request->input("q");
            $products->where('name', 'LIKE', "%{$searchQuery}%")
                ->orWhere('description', 'LIKE', "%{$searchQuery}%")
                ->get();
        }

        $products = $products->paginate(12);

        return view("products.index", compact("products"));
    }
}
