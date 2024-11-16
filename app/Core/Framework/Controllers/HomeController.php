<?php

namespace App\Core\Framework\Controllers;

use App\Core\Domain\Enums\StatusEnum;
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
        $products = Product::take(12)->get();
        $categories = Category::with("categories")
            ->where("category_id", null)
            ->where("status", StatusEnum::PUBLISH->value)
            ->withCount("products")
            ->take(20)
            ->get();

        $ads = $adsInteractor->getAds->run();
        $randomAds = $adsInteractor->getRandomAds->run();

        return response()->view("products.home", compact("products", "categories", "ads", "randomAds"));
    }
}
