<?php

namespace App\Ecommerce\Seller\Framework\Controllers;


use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Seller\Domain\Usecases\shop\ShopInteractor;
use App\Ecommerce\Seller\Framework\Requests\ShopRequest;
use App\Ecommerce\Seller\Framework\Requests\UpdateShopInfoRequest;
use App\Ecommerce\Shop\Domain\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Inertia\Inertia;

class StoreController extends Controller
{
    public function __construct(private readonly ShopInteractor $shopInteractor)
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): \Inertia\Response
    {
        return Inertia::render("admin/store/stores/create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ShopRequest $request): void
    {

        $imagePath = "";
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('shops/images', 'public');
        }

        $this->shopInteractor->addShop->run([
            'name' => $request->name,
            'slug' => Str::slug($request->name),
            'image' => $imagePath,
            'cover_image' => null,
            'description' => $request->description,
            'user_id' => auth()->id()
        ]);

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateShopInfoRequest $request, string $id): void
    {
        $this->shopInteractor->updateShop->run($request->all(), $id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): void
    {
        $shop = $this->shopInteractor->getShop->run($id);
        if (Storage::exists($shop->image)) {
            Storage::delete($shop->image);
        }
        $this->shopInteractor->removeShop->run($shop->id);
    }
}
