<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CategoryResource;
use App\Models\Category;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\Cast\String_;

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
        return new CategoryResource(Category::with("products")->findOrFail($id));
    }
}
