<?php

namespace App\Ecommerce\Checkout\Framework\Controllers;

use App\Core\Framework\Controllers\Controller;
use App\Ecommerce\Products\Domain\Models\Product;
use App\Ecommerce\Products\Domain\Usecases\orders\OrderInteractor;
use App\Ecommerce\Products\Domain\Usecases\products\ProductInteractor;
use App\Http\Requests\CheckoutRequest;
use App\Profile\Domain\Models\Order;
use App\Profile\Domain\Usecases\AddressInteractor;
use Exception;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(
        CheckoutRequest   $request,
        ProductInteractor $productInteractor,
        OrderInteractor   $orderInteractor,
        AddressInteractor $addressInteractor
    ): \Illuminate\Http\RedirectResponse
    {
        try {

            $userId = auth()->user()->id;

            foreach ($request->all()["products"] as $product) {
                $productModel = $productInteractor->getProduct->run($product["productId"]);
                $address = $addressInteractor->addAddress->run(array_merge($request->input("address"), [
                    "user_id" => $userId
                ]));

                $order = $orderInteractor->addOrder->run([
                    "user_id" => $userId,
                    "address_id" => $address->id,
                    "product_id" => $productModel->id,
                    "quantity" => $product["productQty"]
                ]);

            }

            return redirect()->back()->with("success", "Commande passée avec succès.");
        } catch (Exception $e) {
            return redirect()->back()->with("error", "Une erreur s'est produite lors du traitement de votre commande. Veuillez réessayer plus tard.");
        }
    }
}
