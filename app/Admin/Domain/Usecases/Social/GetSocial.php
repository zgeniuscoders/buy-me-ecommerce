<?php

namespace App\Admin\Domain\Usecases\Social;

use App\Admin\Domain\Repository\SocialNetworkRepository;

readonly class GetSocial
{

    public function __construct(
        private SocialNetworkRepository $repository
    )
    {
    }

    public function run(int $socialId): \App\Models\SocialNetwork
    {
        return $this->repository->getSocial($socialId);
    }

}
