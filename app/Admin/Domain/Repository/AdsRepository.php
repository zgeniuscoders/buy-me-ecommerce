<?php

namespace App\Admin\Domain\Repository;

use App\Admin\Domain\Models\Ads;
use Illuminate\Database\Eloquent\Collection;

interface AdsRepository
{

    public function getAds() : Collection;

    public function getAdsById(int $id): Ads;

    public function addAds(array $data): Ads;

    public function updateAds(int $id, array $data): Ads;

    public function deleteAds(int $id);

}
