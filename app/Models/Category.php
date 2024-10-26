<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];
    // protected $fillable = ["status", "name", "image", "category_id"];

    public function subCategories(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Category::class);
    }

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class);
    }

}
