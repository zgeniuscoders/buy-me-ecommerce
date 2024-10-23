<?php

namespace App\Http\Controllers\api\post;

use App\Http\Controllers\Controller;
use App\Models\Post;
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
