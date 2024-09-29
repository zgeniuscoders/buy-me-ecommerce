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
            "name" => $this->name,
            'image' => $this->image,
            'images' => $this->images,
            'price' => $this->price,
            'discount' => $this->discount,
            'description' => $this->description,
            'category' => new CategoryResource($this->whenLoaded("category")),
            'store' => new ShopResource($this->whenLoaded("store"))
        ];
    }
}
