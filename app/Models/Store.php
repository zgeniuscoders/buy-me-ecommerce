<?php

namespace App\Models;

use Illuminate\Support\Facades\URL;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\MorphToMany;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Store extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'user_id',
        'image',
        'cover_image',
        'social_networks',
        'slug',
        'is_disabled'
    ];

    public function products(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Product::class);
    }

    public function owner(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function subscribers(): BelongsToMany
    {
        return $this->belongsToMany(User::class, "shop_subscribers");
    }

    public function rates(): MorphToMany
    {
        return $this->morphToMany(Rate::class, "rateble");
    }

    public function getImageAttribute($value)
    {
        return URL::to("storage/$value");
    }

    // public function getisDisabledAttribute($value){
    //     if($value){
    //         return "Desactiver";
    //     }else{
    //         return "Activer";
    //     }
    // }

    // public function getCreatedAtAttribute($value){
    //     return $value->format("YY");
    // }
}
