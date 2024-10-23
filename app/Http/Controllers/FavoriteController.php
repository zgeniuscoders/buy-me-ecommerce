<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;

class FavoriteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = User::with("favoriteProducts")
            ->where("id", auth()->user()->id)
            ->firstOrFail()
            ->favoriteProducts;



        return view("products.favorite.index", compact("products"));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $product = Product::withCount("favoriteProductUser")
            ->findOrFail($request->productId);

        $product->favoriteProductUser()->toggle([
            request()->user()->id
        ]);

        return redirect()->back();
    }



    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::withCount("favoriteProductUser")
            ->findOrFail($id);

        $product->favoriteProductUser()->detach([
            request()->user()->id
        ]);

        return redirect()->back();
    }
}