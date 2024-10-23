<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
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
            "content" => $this->content,
            "image" => $this->image,
            "color" => $this->color,
            "shop" => new ShopResource($this->whenLoaded("store")),
            "comments" => CommentResource::collection($this->whenLoaded("comments")),
            "likes" => $this->likes_count,
            "comments_count" => $this->comments_count,
            "is_like" => $this->likes()->where("user_id", $request->user()->id)->exists(),
        ];
    }
}
