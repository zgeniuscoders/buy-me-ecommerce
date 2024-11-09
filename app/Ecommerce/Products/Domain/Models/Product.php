<?php

namespace App\Ecommerce\Products\Domain\Models;

use App\Core\Domain\Models\Category;
use App\Ecommerce\Shop\Domain\Models\Store;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
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
        'has_delivered'
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

    public function favoriteProductUser()
    {
        return $this->belongsToMany(User::class, "favorite_products");
    }


    public function orders(): HasMany
    {
        return $this->hasMany(Order::class);
    }

    public function getImageAttribute($value)
    {
        return URL::to("storage/$value");
    }

    public function getStatusAttribute($value)
    {
        if ($value) {
            return true;
        }
        return false;
    }

    public function getExcerpt($size = 100)
    {
        return Str::limit($this->description, $size) . (Str::length($this->description) < $size ? "" : "...");
    }

    public function getImagesAttribute($value)
    {
        $images = [];
        foreach (json_decode($value) as $image) {
            $images[] = URL::to("storage/$image");
        }

        return $images;
    }

    public function rates(): MorphToMany
    {
        return $this->morphToMany(Rate::class, "rateble");
    }

    public function getHasDeliveredAttribute($value)
    {
        if ($value) {
            return "Oui";
        } else {
            return "Non";
        }
    }
}
