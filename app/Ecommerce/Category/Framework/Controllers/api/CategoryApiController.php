<?php

namespace App\Ecommerce\Category\Framework\Controllers\api;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Category\Domain\Models\Category;
use App\Http\Resources\CategoryResource;
use Illuminate\Http\Request;

class CategoryApiController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function index(Request $request)
    {
        $perPage = $request->input("per_page") ?: 2;
        $categories = Category::paginate($perPage);

        return CategoryResource::collection($categories);
    }

    /**
     * Handle the incoming request.
     */
    public function show(string $id)
    {
        return new CategoryResource(Category::with("Products")->findOrFail($id));
    }
}
