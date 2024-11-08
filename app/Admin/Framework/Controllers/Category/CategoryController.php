<?php

namespace App\Admin\Framework\Controllers\Category;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Category\Domain\Enums\CategoryStatusEnum;
use App\Ecommerce\Category\Domain\Models\Category;
use App\Http\Requests\AddCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Support\Str;
use Inertia\Inertia;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with("Category")->get();

        return Inertia::render("admin/admin/Category/index", ["categories" => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();

        $status = [
            ['id' => 1, 'name' => CategoryStatusEnum::AVAILABLE->value],
            ['id' => 2, 'name' => CategoryStatusEnum::UNAVAILABLE->value]
        ];

        return Inertia::render("admin/admin/Category/create", [
            "categories" => $categories,
            "status" => $status
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddCategoryRequest $request)
    {

        $imagePath = "";
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories/images', 'public');
        }

        $category = Category::create(array_merge(
            $request->all(),
            [
                'slug' => Str::slug($request->name),
                'image' => $imagePath,
            ]
        ));

        return redirect()->back()->with("success", "La Category a ete ajouter avec success");
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);
        $categories = Category::all();

        $status = [
            ['id' => CategoryStatusEnum::AVAILABLE->value, 'name' => CategoryStatusEnum::AVAILABLE->value],
            ['id' => CategoryStatusEnum::UNAVAILABLE->value, 'name' => CategoryStatusEnum::UNAVAILABLE->value]
        ];

        return Inertia::render("admin/admin/Category/edit", [
            "Category" => $category,
            "categories" => $categories,
            "status" => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id)
    {

        $category = Category::findOrFail($id);
        $category->update($request->all());

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->delete();

        return redirect()->back();
    }
}
