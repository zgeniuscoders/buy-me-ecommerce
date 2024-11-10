<?php

namespace App\Admin\Domain\Usecases\Ads;

use App\Admin\Domain\Repository\AdsRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class RemoveAds
{

    public function __construct(public AdsRepository $repository){

    }

    public function run(int $adsId)
    {
        return $this->repository->deleteAds($adsId);
    }

}
