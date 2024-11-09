<?php

namespace App\Ecommerce\Products\Framework\Controllers\products;


use App\Core\Domain\Models\Category;
use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Product;
use Illuminate\Http\Request;

class FilterProductController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $categories = Category::where("category_id", "!=", null)->get();
        $products = Product::with(["Category"]);

        if ($request->has("categories")) {
            $categoriesFiltered = $request->get("categories");
            $categoryIds = Category::whereIn('name', $categoriesFiltered)->pluck('id');

            if (!empty($categoryIds)) {
                $products->whereIn('category_id', $categoryIds);
            }
        }

        if ($request->has("price_range")) {
            $price = $request->get("price_range");
            $products->where('price', '<', $price);
        }

        if ($request->has("q") && !empty($request->input("q"))) {
            $searchQuery = $request->input("q");
            $products->where('name', 'LIKE', "%{$searchQuery}%")
                ->orWhere('description', 'LIKE', "%{$searchQuery}%");
        }

        $products = $products->paginate(10);

        return view("Products.filter-product", compact("products", "categories"));
    }
}
