<?php

namespace App\Admin\Domain\Usecases\Ads;

use App\Admin\Domain\Repository\AdsRepository;

readonly class UpdateAds
{

    public function __construct(public AdsRepository $repository)
    {

    }

    public function run(int $adsId, array $data): \App\Admin\Domain\Models\Ads
    {
        return $this->repository->updateAds($adsId, $data);
    }

}
