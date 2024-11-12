<?php

namespace App\Ecommerce\Products\Framework\Controllers\products;

use App\Ecommerce\Products\Domain\Usecases\products\ProductInteractor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class NewArrivalsController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, ProductInteractor $productInteractor): Response
    {
        $user = auth()->user();

        $products = $productInteractor->getNewArrivals->run($user, null);
        return response()->view("products.index", compact("products"));
    }
}
