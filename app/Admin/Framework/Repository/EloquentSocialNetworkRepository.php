<?php

namespace App\Admin\Framework\Repository;

use App\Admin\Domain\Repository\SocialNetworkRepository;
use App\Models\SocialNetwork;
use Illuminate\Database\Eloquent\Collection;

class EloquentSocialNetworkRepository implements SocialNetworkRepository
{

    public function getAll(): Collection
    {
        return SocialNetwork::all();
    }

    public function updateSocialNetwork(array $data, int $socialId): SocialNetwork
    {
        $social = SocialNetwork::findOrFail($socialId);
        $social->update($data);
        return $social;
    }

    public function createSocialNetwork(array $data): SocialNetwork
    {
        return SocialNetwork::create($data);
    }

    public function deleteSocialNetwork(int $socialId): void
    {
        $social = SocialNetwork::findOrFail($socialId);
        $social->delete();
    }

    public function getSocial(int $socialId): SocialNetwork
    {
        return SocialNetwork::findOrFail($socialId);
    }
}
