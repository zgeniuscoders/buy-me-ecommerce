<?php

namespace App\Ecommerce\Products\Framework\Controllers\cart;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Product;
use App\Http\Services\Cart;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Inertia\Inertia;

class CartController extends Controller
{

    public function getCart(): \Inertia\Response
    {
        $cart = session('cart');

        if (!$cart) {
            $cart = new Cart();
        }

        $items = $cart->getItems();
        $totalPrice = $cart->getTotalPrice();

        return Inertia::render("cart/index", ['cart' => $items, 'totalPrice' => $totalPrice]);

    }

    public function addToCart(Request $request): RedirectResponse
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

    public function removeFromCart($productId): RedirectResponse
    {
        $cart = session('cart');

        if (!$cart) {
            return redirect()->back();
        }

        $cart->remove($productId);

        session(['cart' => $cart]);

        return redirect()->back();
    }

    public function clearCart(): RedirectResponse
    {
        session()->forget('cart');

        return redirect()->route('home');
    }
}

