<?php

namespace App\Admin\Domain\Repository;

use App\Models\SocialNetwork;
use Illuminate\Database\Eloquent\Collection;

interface SocialNetworkRepository
{

    public function getAll(): Collection;

    public function getSocial(int $socialId): SocialNetwork;

    public function createSocialNetwork(array $data): SocialNetwork;

    public function updateSocialNetwork(array $data, int $socialId): SocialNetwork;

    public function deleteSocialNetwork(int $socialId): void;

}
