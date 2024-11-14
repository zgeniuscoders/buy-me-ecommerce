<?php

namespace App\Core\Domain\Usecases;

use App\Core\Domain\Repository\GetAdsRepository;

class GetAdsInteractor
{

    public function __construct(public GetAds $getAds,public GetRandomAds $getRandomAds)
    {
    }

    static public function build(GetAdsRepository $repository): GetAdsInteractor
    {
        return new GetAdsInteractor(
            new GetAds($repository),
            new GetRandomAds($repository)
        );
    }
}
