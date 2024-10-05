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
            'discount' => $this->discount,
            'description' => $this->description,
            "is_favorite" => $this->favoriteProductUser()->where("user_id", $request->user()->id)->exists(),
            'category' => new CategoryResource($this->whenLoaded("category")),
            'store' => new ShopResource($this->whenLoaded("store"))
        ];
    }
}
