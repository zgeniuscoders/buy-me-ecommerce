<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $products = Product::take(8)->get();
        $categories = Category::withCount("products")->get();
        
        return view("products.home", compact("products", "categories"));
    }
}
