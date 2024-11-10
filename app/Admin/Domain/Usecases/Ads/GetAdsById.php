<?php

namespace App\Admin\Domain\Usecases\Ads;

use App\Admin\Domain\Repository\AdsRepository;

readonly class GetAdsById
{

    public function __construct(public AdsRepository $repository){

    }

    public function run(int $adsId): \App\Admin\Domain\Models\Ads
    {
        return $this->repository->getAdsById($adsId);
    }

}
