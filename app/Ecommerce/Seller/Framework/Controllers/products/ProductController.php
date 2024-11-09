<?php

namespace App\Ecommerce\Seller\Framework\Controllers\products;

use App\Core\Domain\Models\Category;
use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Product;
use App\Ecommerce\Products\Framework\Requests\ProductRequest;
use App\Ecommerce\Products\Framework\Requests\UpdateProductRequest;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): \Inertia\Response
    {
        $storeId = auth()->user()->store->id;

        $products = Product::with(['Category'])
            ->where("store_id", $storeId)
            ->get();

        return Inertia::render('admin/store/Products/index', [
            'Products' => $products
        ]);
    }


    public function create(): \Inertia\Response
    {
        $categories = Category::all();
        $status = [['id' => 1, 'name' => 'available'], ['id' => 2, 'name' => 'valid']];

        return Inertia::render('admin/store/Products/create', [
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

        return Inertia::render('admin/store/Products/edit', [
            'product' => $product,
            'categories' => $categories,
            'status' => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id)
    {
        $product = Product::findOrFail($id);
        $product->update($request->all());

        return redirect()->route("admin.Products.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);
        if (Storage::exists($product->image)) {
            Storage::delete($product->image);
        }

        $product->delete();

        return redirect()->route("admin.Products.index");
    }
}
