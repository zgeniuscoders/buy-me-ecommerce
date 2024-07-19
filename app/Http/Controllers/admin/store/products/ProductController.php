<?php

namespace App\Http\Controllers\admin\store\products;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Inertia\Response
    {
        $products = Product::with(['category'])->paginate(10);
        return Inertia::render('admin/store/products/index', [
            'products' => $products
        ]);
    }


    public function create(): \Inertia\Response
    {
        $categories = Category::all();
        $status = [['id' => 1, 'name' => 'available'], ['id' => 2, 'name' => 'valid']];

        return Inertia::render('admin/store/products/create', [
            'categories' => $categories,
            'status' => $status
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $storeId = auth()->user()->store->id;

        $imagePaths = [];
        $imagePath = "";
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products/images', 'public');
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

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    public function edit(string $id): \Inertia\Response
    {
        $product = Product::findOrFail($id);
        $categories = Category::all();
        $status = [['id' => 1, 'name' => 'available'], ['id' => 2, 'name' => 'valid']];

        return Inertia::render('admin/store/products/edit', [
            'product' => $product,
            'categories' => $categories,
            'status' => $status
        ]);
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
