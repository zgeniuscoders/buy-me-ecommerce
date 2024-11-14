<?php

namespace App\Post\Framework\Controllers\api;

use App\Core\Framework\Controllers\Controller;
use App\Post\Domain\Models\Post;
use Illuminate\Http\Request;

class PostLikeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $shop = Post::findOrFail($request->postId);

        $shop->likes()->toggle([
            request()->user()->id
        ]);
    }
}
