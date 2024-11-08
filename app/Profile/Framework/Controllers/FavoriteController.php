<?php

namespace App\Profile\Framework\Controllers;

use App\Core\Domain\Models\User;
use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Product;
use Illuminate\Http\Request;
use Inertia\Inertia;

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

        return Inertia::render("profile/favorite/favorite", ["Products" => $products]);
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
