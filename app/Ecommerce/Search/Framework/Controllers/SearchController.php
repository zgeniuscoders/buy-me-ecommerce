<?php

namespace App\Ecommerce\Search\Framework\Controllers;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Product;
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

        return view("Products.index", compact("products"));
    }
}
