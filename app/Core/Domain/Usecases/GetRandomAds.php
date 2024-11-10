<?php

namespace App\Core\Domain\Usecases;

use App\Admin\Domain\Models\Ads;
use App\Core\Domain\Repository\GetAdsRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class GetRandomAds
{

    public function __construct(private GetAdsRepository $repository)
    {
    }

    public function run(): Ads | null
    {
        return $this->repository->getRandomAds();
    }

}
