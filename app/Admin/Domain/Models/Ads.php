<?php

namespace App\Admin\Domain\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\URL;

class Ads extends Model
{
    use HasFactory;

    protected $fillable = [
        "product_id",
        "title",
        "description",
        "sub_title",
        "image",
        "button_text",
        "start_at",
        "end_at",
        "url",
        "status"
    ];

    public function getImageAttribute($value): string
    {
        return URL::to("storage/$value");
    }
}
