<?php

namespace App\Core\Framework\Repository;

use App\Admin\Domain\Models\Ads;
use App\Core\Domain\Enums\StatusEnum;
use App\Core\Domain\Repository\GetAdsRepository;
use Illuminate\Database\Eloquent\Collection;

class EloquentGetAdsRepository implements GetAdsRepository
{

    public function getAds(): Collection
    {
        return Ads::where('end_at', '>', now()->toDateString())
            ->where('status', '!=', StatusEnum::DRAFT->value)
            ->take(6)->get();
    }

    public function getRandomAds(): Ads | null
    {
        return Ads::where('end_at', '>', now()->toDateString())
            ->where('status', '!=', StatusEnum::DRAFT->value)
            ->inRandomOrder()
            ->first();
    }
}
