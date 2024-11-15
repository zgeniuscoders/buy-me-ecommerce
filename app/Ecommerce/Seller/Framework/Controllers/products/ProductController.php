<?php

namespace App\Ecommerce\Seller\Framework\Controllers\products;

use App\Admin\Domain\Usecases\Category\CategoryInteractor;
use App\Core\Domain\Enums\StatusEnum;
use App\Core\Domain\Models\Category;
use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Product;
use App\Ecommerce\Products\Framework\Requests\ProductRequest;
use App\Ecommerce\Products\Framework\Requests\UpdateProductRequest;
use App\Ecommerce\Seller\Domain\Usecases\Product\ShopProductInteractor;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class ProductController extends Controller
{

    public function __construct(private readonly ShopProductInteractor $productInteractor, private readonly CategoryInteractor $categoryInteractor)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        if (Auth::user()->cannot('viewAny', Product::class)) {
            abort(403);
        }

        $storeId = auth()->user()->store->id;
        $products = $this->productInteractor->getShopProducts->run($storeId);

        return Inertia::render('store/products/index', [
            'products' => $products
        ]);
    }


    public function create(): Response
    {

        if (Auth::user()->cannot('create', Product::class)) {
            abort(403);
        }

        $categories = Category::all();
        $status = [['id' => 1, 'name' => StatusEnum::DRAFT->value], ['id' => 2, 'name' => StatusEnum::PUBLISH->value]];

        return Inertia::render('store/products/create', [
            'categories' => $categories,
            'status' => $status
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request): void
    {

        if (Auth::user()->cannot('create', Product::class)) {
            abort(403);
        }

        $storeId = auth()->user()->store->id;

        $imagePaths = [];
        $imagePath = "";
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('products/images', 'public');
        }

        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('products/images', 'public');
                $imagePaths[] = URL::to("storage/$path");
            }
        }

        $this->productInteractor->addProduct->run(array_merge(
            $request->all(),
            [
                'store_id' => $storeId,
                'slug' => Str::slug($request->name),
                'image' => URL::to("storage/$imagePath"),
                'images' => json_encode($imagePaths)
            ]
        ));

    }


    public function edit(string $id): Response
    {

        $product = $this->productInteractor->getProduct->run($id);

        if (Auth::user()->cannot('update', $product)) {
            abort(403);
        }

        $categories = $this->categoryInteractor->getCategories->run();

        $status = [['id' => 1, 'name' => StatusEnum::DRAFT->value], ['id' => 2, 'name' => StatusEnum::PUBLISH->value]];

        return Inertia::render('store/products/edit', [
            'product' => $product,
            'categories' => $categories,
            'status' => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProductRequest $request, string $id): RedirectResponse
    {
        $product = $this->productInteractor->updateProduct->run($request->all(), $id);
        if (Auth::user()->cannot('update', $product)) {
            abort(403);
        }
        return redirect()->route("admin.Products.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {

        $product = $this->productInteractor->getProduct->run($id);

        if (Auth::user()->cannot('delete', $product)) {
            abort(403);
        }

        if (Storage::exists($product->image)) {
            Storage::delete($product->image);
        }

        $this->productInteractor->removeProduct->run($product->id);

        return redirect()->route("admin.Products.index");
    }
}
