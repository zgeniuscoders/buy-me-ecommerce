<?php

namespace App\Admin\Domain\Usecases\Ads;

use App\Admin\Domain\Repository\AdsRepository;

class AdsInteractor
{

    public function __construct(
        public AddAds $addAds,
        public GetAds $getAds,
        public UpdateAds $updateAds,
        public RemoveAds $removeAds,
        public GetAdsById $getAdsById
    )
    {
    }

    static public function build(AdsRepository $repository): AdsInteractor
    {
        return new AdsInteractor(
            new AddAds($repository),
            new GetAds($repository),
            new UpdateAds($repository),
            new RemoveAds($repository),
            new GetAdsById($repository)
        );
    }

}
