<?php

namespace App\Admin\Domain\Usecases\Ads;

use App\Admin\Domain\Repository\AdsRepository;

readonly class AddAds
{
    public function __construct(public AdsRepository $repository){

    }

    public function run(array $data): \App\Admin\Domain\Models\Ads
    {
        return $this->repository->addAds($data);
    }
}
