<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ShopResource extends JsonResource
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
            "image" => $this->image,
            "cover_image" => $this->cover_image,
            "description" => $this->description,
            "subscribers" => $this->subscribers_count,
            "is_subscriber" => $this->subscribers()->where("user_id", $request->user()->id)->exists(),
            "Products" => ProductResource::collection($this->whenLoaded("Products"))
        ];
    }
}
