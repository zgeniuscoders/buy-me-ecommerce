<?php

namespace App\Admin\Domain\Usecases\Social;

use App\Admin\Domain\Repository\SocialNetworkRepository;

readonly class DeleteSocialNetwork
{

    public function __construct(
        private SocialNetworkRepository $repository
    )
    {
    }

    public function run(int $socialId): void
    {
        $this->repository->deleteSocialNetwork($socialId);
    }

}
