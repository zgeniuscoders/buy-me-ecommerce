<?php

namespace App\Profile\Domain\Models;

use App\Core\Domain\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = ["phone_number", "city", "address", "user_id"];

    public function customer()
    {
        return $this->belongsTo(User::class);
    }
}
