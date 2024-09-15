<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $products = Product::all();

        if ($request->has("category")) {
            $category = Category::where("name", $request->input("category"))->firstOrFail();
            $products = $products->where("category_id", $category->id);
        }

        return view("products.index", compact("products"));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);
        return view("products.show", compact("product"));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
