<?php

namespace App\Post\Framework\Controllers\api;

use App\Core\Framework\Controllers\Controller;
use App\Http\Requests\PostApiRequest;
use App\Http\Resources\PostResource;
use App\Post\Domain\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with(["store", "comments", "comments.user"])
            ->withCount(["likes", "comments"])->get();
        return PostResource::collection($posts);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PostApiRequest $request)
    {
        $storeId = $request->user()->store->id;
        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('posts/images', 'public');
        }

        Post::create(
            array_merge(
                $request->all(),
                [
                    'store_id' => $storeId,
                    'image' => $imagePath,
                ]
            )
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $post = Post::with(
            [
                "store",
                "comments",
                "comments.user"
            ]
        )
            ->withCount([
                "likes",
                "comments"
            ])
            ->findOrFail($id);

        return new PostResource($post);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id) {}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $post = Post::find($id);
        $post->delete();
    }
}
