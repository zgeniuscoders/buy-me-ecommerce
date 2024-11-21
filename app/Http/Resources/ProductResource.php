<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            'image' => $this->image,
            'images' => $this->images,
            'price' => $this->price,
            'description' => $this->description,
            'slug' => $this->slug,
            'qty' => $this->qty,
            'categoryId' => $this->category_id,
            'storeId' => $this->store_id,
            'has_delivered' => $this->has_delivered,
            'inStock' => $this->in_stock,
//            "is_favorite" => $this->favoriteProductUser()->where("user_id", $request->user()->id ?: null)->exists(),
//            'category' => new CategoryResource($this->whenLoaded("category")),
//            'store' => new ShopResource($this->whenLoaded("store"))
        ];
    }
}
