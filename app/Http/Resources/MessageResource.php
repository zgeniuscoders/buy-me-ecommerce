<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class MessageResource extends JsonResource
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
            "message" => $this->message,
            "is_read" => $this->isRead,
            "created_at" => $this->created_at,
            "sender_id" => $this->sender_id,
            "file" => $this->file,
            "filetype" => $this->filetype,
            "edited_at" => $this->edited_at,
            "deleted_at" => $this->deleted_at
        ];
    }
}
