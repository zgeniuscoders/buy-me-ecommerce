<?php

namespace App\Ecommerce\Products\Framework\Controllers\api\order;


use App\Core\Framework\Controllers\Controller;
use App\Http\Resources\OrderResource;
use App\Models\User;
use Illuminate\Http\Request;

class OrderUserController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {

        $perPage = $request->input("per_page") ?: 2;

        $user = User::with(["orders.product"])
            ->find($request->user()->id);

        $orders = $user->orders()->with("product")->paginate($perPage);

        return OrderResource::collection($orders);
    }
}
