<?php

namespace App\Http\Controllers;

use App\Core\Domain\Usecases\GetAdsInteractor;
use App\Http\Resources\AdsResource;
use Illuminate\Http\Request;

class ApiGetAdsController
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request, GetAdsInteractor $getAdsInteractor)
    {
        $ads = $getAdsInteractor->getAds->run();
        return AdsResource::collection($ads);
    }
}
