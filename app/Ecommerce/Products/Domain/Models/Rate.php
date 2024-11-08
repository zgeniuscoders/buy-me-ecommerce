<?php

namespace App\Ecommerce\Products\Domain\Models;

use App\Ecommerce\Shop\Domain\Models\Store;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    public function shops()
    {
        return $this->morphedByMany(Store::class, 'rateble');
    }

    public function products()
    {
        return $this->morphedByMany(Product::class, "rateble");
    }
}
