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

        $products = Product::with("favoriteProductUser")
            ->paginate(5);
        $user = auth()->user();

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
