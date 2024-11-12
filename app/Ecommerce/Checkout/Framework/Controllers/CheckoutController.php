<?php

namespace App\Ecommerce\Checkout\Framework\Controllers;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Product;
use App\Profile\Domain\Models\Order;
use Exception;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request): \Illuminate\Http\RedirectResponse
    {
        try {

            foreach ($request->all()["productId"] as $k => $product) {
                $product = Product::find($product)->firstOrFail();
                $qty = $request->all()["qty"][$k];

                Order::create([
                    "product_id" => $product->id,
                    "user_id" => auth()->user()->id,
                    "quantity" => $qty
                ]);
            }

            return redirect()->back()->with("success", "Commande passée avec succès.");
        } catch (Exception $e) {
            return redirect()->back()->with("error", "Une erreur s'est produite lors du traitement de votre commande. Veuillez réessayer plus tard.");
        }
    }
}
