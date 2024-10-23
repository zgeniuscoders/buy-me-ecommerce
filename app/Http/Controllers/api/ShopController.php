<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ShopResource;
use App\Models\Store;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $shops = Store::withCount("subscribers")
            ->with("subscribers")
            ->get();
        

        return ShopResource::collection($shops);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validator = Validator::make(
            $request->all(),
            [
                'name' => ['required', 'string', 'min:3'],
                'description' => ['required', 'string', 'min:20'],
            ]
        );

        if ($validator->fails()) {
            return response()->json([
                'status' => false,
                'message' => 'Validation failed',
                'errors' => $validator->errors()
            ], 422);
        }

        $store = Store::create(
            [
                'name' => $request->name,
                'slug' => Str::slug($request->name),
                'image' => null,
                'cover_image' => null,
                'description' => $request->description,
                'user_id' => $request->user()->id
            ]
        );

        return response()->json([
            'status' => true,
            'message' => 'succces',
            'store' => $store,
        ]);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $shop = Store::with("products")->withCount("subscribers")->findOrFail($id);
        return new ShopResource($shop);
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
