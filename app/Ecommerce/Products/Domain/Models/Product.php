<?php

namespace App\Ecommerce\Products\Domain\Models;

use App\Core\Domain\Models\Category;
use App\Ecommerce\Shop\Domain\Models\Store;
use App\Models\User;
use App\Profile\Domain\Models\Order;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Str;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'image',
        'images',
        'price',
        'discount',
        'status',
        'qty',
        'description',
        'category_id',
        'store_id',
        'has_delivered',
        'in_stock'
    ];

    protected function casts(): array
    {
        return [
            'has_delivered' => 'boolean',
        ];
    }

    public function store(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function category(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    // protected function images(): Attribute
    // {
    //     return Attribute::make(
    //         get: fn(string $value) => json_decode($value),
    //     );
    // }

    public function favoriteProductUser(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "favorite_products");
    }


    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }


    public function getStatusAttribute($value): bool
    {
        if ($value) {
            return true;
        }
        return false;
    }

    public function getInStockAttribute($value): bool
    {
        if ($value) {
            return true;
        }
        return false;
    }

    public function getExcerpt($size = 100): string
    {
        return Str::limit($this->description, $size) . (Str::length($this->description) < $size ? "" : "...");
    }

    public function getImagesAttribute($value): array
    {
        $images = [];
        foreach (json_decode($value) as $image) {
            $images[] = $image;
        }

        return $images;
    }

    public function rates(): MorphToMany
    {
        return $this->morphToMany(Rate::class, "rateble");
    }
}
