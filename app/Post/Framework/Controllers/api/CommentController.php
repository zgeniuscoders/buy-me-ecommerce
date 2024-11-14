<?php

namespace App\Post\Framework\Controllers\api;

use App\Core\Framework\Controllers\Controller;
use App\Post\Domain\Models\Comment;
use App\Post\Framework\Requests\CommentRequest;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    /**
     * Store a newly created resource in storage.
     */
    public function store(CommentRequest $request)
    {
        Comment::create([
            "post_id" => $request->postId,
            "user_id" => request()->user()->id,
            "comment" => $request->comment,
        ]);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
