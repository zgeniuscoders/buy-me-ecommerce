<?php

namespace App\Core\Framework\Controllers;

use App\Core\Domain\Models\Category;
use App\Core\Domain\Usecases\GetAdsInteractor;
use App\Ecommerce\Products\Domain\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, GetAdsInteractor $adsInteractor): Response
    {
        $products = Product::take(8)->get();
        $categories = Category::withCount("Products")->take(20)->get();
        $ads = $adsInteractor->getAds->run();
        $randomAds = $adsInteractor->getRandomAds->run();

        return response()->view("Products.home", compact("products", "categories","ads","randomAds"));
    }
}
