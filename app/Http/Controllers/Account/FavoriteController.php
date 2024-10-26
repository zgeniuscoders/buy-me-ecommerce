<?php

namespace App\Http\Controllers\Account;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Product;

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

        return Inertia::render("profile/favorite/favorite", ["products" => $products]);
    }

 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    }
}