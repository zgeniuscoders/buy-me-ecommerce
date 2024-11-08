<?php

namespace App\Ecommerce\Products\Framework\Controllers\products;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Category\Domain\Models\Category;
use App\Ecommerce\Products\Domain\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $products = Product::with("favoriteProductUser")->paginate(12);
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

        if ($request->has("Category")) {
            $category = Category::where("name", $request->input("Category"))->firstOrFail();
            $products = $products->where("category_id", $category->id);
        }


        return view("Products.index", compact("products"));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::findOrFail($id);

        $products = Product::where("category_id", $product->category_id)
            ->take(8)
            ->get();


        return view("Products.show", compact("product","products"));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }
}
