<?php

namespace App\Core\Framework\Controllers;

use App\Ecommerce\Category\Domain\Models\Category;
use App\Ecommerce\Products\Domain\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $products = Product::take(8)->get();
        $categories = Category::withCount("Products")->get();

        return view("Products.home", compact("products", "categories"));
    }
}
