<?php

namespace App\Core\Domain\Usecases;

use App\Core\Domain\Repository\GetAdsRepository;
use Illuminate\Database\Eloquent\Collection;

readonly class GetAds
{
    public function __construct(private GetAdsRepository $repository)
    {
    }

    public function run(): Collection
    {
        return $this->repository->getAds();
    }
}
