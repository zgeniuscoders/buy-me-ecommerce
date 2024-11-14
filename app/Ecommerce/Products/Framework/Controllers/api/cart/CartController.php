<?php

namespace App\Ecommerce\Products\Framework\Controllers\api\cart;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Product;
use App\Http\Services\Cart;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index(): \Illuminate\Http\JsonResponse
    {
        $cart = session('cart');

        if (!$cart) {
            $cart = new Cart();
        }

        $items = $cart->getItems();
        $totalPrice = $cart->getTotalPrice();

        return response()->json([
                "data" => $items,
                "totalPrice" => $totalPrice
            ]
        );
    }

    public function store(Request $request): \Illuminate\Http\RedirectResponse
    {
        $cart = session('cart');

        if (!$cart) {
            $cart = new Cart();
        }

        $product = Product::findOrFail($request->productId);
        $cart->add($request->productId, product: $product);

        session(['cart' => $cart]);

        return redirect()->back();
    }

    public function update($id,Request $request)
    {
        $cart = session('cart');
        $cart->update($id,$request->qty);
    }

    public function removeFromCart($productId): \Illuminate\Http\RedirectResponse
    {
        $cart = session('cart');

        if (!$cart) {
            return redirect()->back();
        }

        $cart->remove($productId);

        session(['cart' => $cart]);

        return redirect()->back();
    }

    public function clearCart(): \Illuminate\Http\RedirectResponse
    {
        session()->forget('cart');

        return redirect()->route('home');
    }
}

