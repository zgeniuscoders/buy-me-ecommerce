<?php

namespace App\Post\Domain\Models;

use App\Ecommerce\Shop\Domain\Models\Store;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ["content", "color", "image", "store_id"];

    public function store(): BelongsTo
    {
        return $this->belongsTo(Store::class);
    }

    public function likes(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "post_likes");
    }

    public function comments(): HasMany{
        return $this->hasMany(Comment::class);
    }
}
