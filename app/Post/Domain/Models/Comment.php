<?php

namespace App\Post\Domain\Models;

use App\Core\Domain\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = ["post_id", "user_id", "comment"];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
