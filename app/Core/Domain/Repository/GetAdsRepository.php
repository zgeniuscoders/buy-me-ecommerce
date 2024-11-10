<?php

namespace App\Core\Domain\Repository;


use App\Admin\Domain\Models\Ads;
use Illuminate\Database\Eloquent\Collection;

interface GetAdsRepository
{
    public function getAds(): Collection;

    public function getRandomAds(): Ads | null;
}
