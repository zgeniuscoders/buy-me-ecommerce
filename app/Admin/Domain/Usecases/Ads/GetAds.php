<?php

namespace App\Admin\Domain\Usecases\Ads;

use App\Admin\Domain\Repository\AdsRepository;

readonly class GetAds
{

    public function __construct(public AdsRepository $repository){

    }

    public function run(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->repository->getAds();
    }

}
