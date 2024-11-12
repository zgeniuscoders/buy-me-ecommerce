<?php

namespace App\Ecommerce\Products\Framework\Controllers\products;

use App\Core\Domain\Models\Category;
use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Product;
use App\Ecommerce\Products\Domain\Usecases\products\ProductInteractor;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function __construct(private ProductInteractor $productInteractor)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): \Illuminate\Http\Response
    {

        $user = auth()->user();

        $category = null;
        if ($request->has("category")) {
            $category = $request->input("category");
        }

        $products = $this->productInteractor->getProducts->run($user, $category);

        return response()->view("products.index", compact("products"));
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id): \Illuminate\Http\Response
    {
        $product = $this->productInteractor->getProduct->run($id);
        $user = auth()->user();

        $products = $this->productInteractor->getProductsByCategory->run($product->category_id, $user);
        return response()->view("products.show", compact("product", "products"));
    }

}
