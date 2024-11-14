<?php

namespace App\Admin\Framework\Controllers\Category;

use App\Admin\Domain\Usecases\Category\CategoryInteractor;
use App\Admin\Framework\Requests\AddCategoryRequest;
use App\Admin\Framework\Requests\UpdateCategoryRequest;
use App\Core\Domain\Enums\CategoryStatusEnum;
use App\Core\Domain\Enums\StatusEnum;
use App\Core\Framework\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Str;
use Inertia\Inertia;
use Inertia\Response;

class CategoryController extends Controller
{

    public function __construct(private readonly CategoryInteractor $categoryInteractor)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        $categories = $this->categoryInteractor->getCategories->run();
        return Inertia::render("admin/admin/category/index", ["categories" => $categories]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): Response
    {
        $categories = $this->categoryInteractor->getCategories->run();

        $status = [
            ['id' => 1, 'name' => StatusEnum::DRAFT->value],
            ['id' => 2, 'name' => StatusEnum::PUBLISH->value]
        ];

        return Inertia::render("admin/admin/category/create", [
            "categories" => $categories,
            "status" => $status
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AddCategoryRequest $request): RedirectResponse
    {

        $imagePath = "";
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('categories/images', 'public');
        }

        $this->categoryInteractor->addCategory->run(array_merge(
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
    public function edit(string $id): Response
    {
        $category = $this->categoryInteractor->getCategory->run($id);
        $categories = $this->categoryInteractor->getCategories->run();

        $status = [
            ['id' => CategoryStatusEnum::AVAILABLE->value, 'name' => CategoryStatusEnum::AVAILABLE->value],
            ['id' => CategoryStatusEnum::UNAVAILABLE->value, 'name' => CategoryStatusEnum::UNAVAILABLE->value]
        ];

        return Inertia::render("admin/admin/category/edit", [
            "category" => $category,
            "categories" => $categories,
            "status" => $status
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategoryRequest $request, string $id): RedirectResponse
    {

        $this->categoryInteractor->updateCategory->run($request,$id);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        $this->categoryInteractor->removeCategory->run($id);
        return redirect()->back();
    }
}
