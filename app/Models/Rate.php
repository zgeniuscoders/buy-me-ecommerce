<?php

namespace App\Models;

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
