<?php

namespace App\Ecommerce\Products\Framework\Controllers\api\products;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Product;
use App\Ecommerce\Products\Framework\Requests\ProductApiRequest;
use App\Http\Resources\ProductResource;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ApiProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): \Illuminate\Http\Resources\Json\AnonymousResourceCollection
    {
        $perPage = $request->input("per_page") ?: 2;
        $products = Product::with(["Category", "store", "favoriteProductUser"])
            ->paginate($perPage);

        return ProductResource::collection($products);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductApiRequest $request)
    {

        $storeId = $request->user()->store->id;

        $imagePaths = [];
        $imagePath = "";
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('Products/images', 'public');
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('prosucts/images', 'public');
                $imagePaths[] = $path;
            }
        }

        Product::create(
            array_merge(
                $request->all(),
                [
                    'store_id' => $storeId,
                    'slug' => Str::slug($request->name),
                    'image' => $imagePath,
                    'images' => json_encode($imagePaths)
                ]
            )
        );

        return response()->json([
            "data" => $request->hasFile('image')
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Product::query()
            ->where("slug", $id)
            ->firstOrFail();

        return new ProductResource($product);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
