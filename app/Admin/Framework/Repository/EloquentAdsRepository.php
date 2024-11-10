<?php

namespace App\Admin\Framework\Repository;

use App\Admin\Domain\Models\Ads;
use App\Admin\Domain\Repository\AdsRepository;
use Illuminate\Database\Eloquent\Collection;

class EloquentAdsRepository implements AdsRepository
{

    public function getAds(): Collection
    {
        return Ads::all();
    }

    public function getAdsById(int $id): Ads
    {
        return Ads::findOrFail($id);
    }

    public function addAds(array $data): Ads
    {
        return Ads::create($data);
    }

    public function updateAds(int $id, array $data): Ads
    {
        $ads = $this->getAdsById($id);
        $ads->update($data);
        return $ads;
    }

    public function deleteAds(int $id): void
    {
        $ads = $this->getAdsById($id);
        $ads->delete();
    }
}
