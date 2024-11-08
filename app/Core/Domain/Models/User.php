<?php

namespace App\Core\Domain\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Ecommerce\Products\Domain\Models\Order;
use App\Ecommerce\Products\Domain\Models\Product;
use App\Ecommerce\Shop\Domain\Models\Store;
use App\Profile\Domain\Models\Address;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use HasFactory, Notifiable, HasApiTokens, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function store(): \Illuminate\Database\Eloquent\Relations\HasOne
    {
        return $this->hasOne(Store::class);
    }

    public function orders()
    {
        return $this->hasMany(Order::class);
    }

    public function subscriptings(): BelongsToMany
    {
        return $this->belongsToMany(Store::class, "shop_subscribers");
    }

    public function favoriteProducts()
    {
        return $this->belongsToMany(Product::class, "favorite_products");
    }

    public function userPostLike()
    {
        return $this->belongsToMany(Product::class, "post_likes");
    }

    public function address()
    {
        return $this->hasOne(Address::class);
    }
}
