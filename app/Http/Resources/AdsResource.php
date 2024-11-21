<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class AdsResource extends JsonResource
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
            "title" => $this->title,
            "description" => $this->description,
            "subTitle" => $this->subTitle,
            "image" => $this->image,
            "buttonText" => $this->button_text,
            "startAt" => $this->start_at,
            "endAt" => $this->end_at,
            "url" => $this->url
        ];
    }
}
