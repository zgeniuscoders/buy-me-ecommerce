<?php

namespace App\Admin\Domain\Usecases\Social;

use App\Admin\Domain\Repository\SocialNetworkRepository;

readonly class UpdateSocialNetwork
{

    public function __construct(
        private SocialNetworkRepository $repository
    )
    {
    }

    public function run(array $data, int $socialId): \App\Models\SocialNetwork
    {
        return $this->repository->updateSocialNetwork($data, $socialId);
    }
}
