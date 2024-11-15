<?php

namespace App\Admin\Domain\Usecases\Social;

use App\Admin\Domain\Repository\SocialNetworkRepository;

readonly class CreateSocialNetwork
{

    public function __construct(
        private SocialNetworkRepository $repository
    )
    {
    }

    public function run(array $data): \App\Models\SocialNetwork
    {
        return $this->repository->createSocialNetwork($data);
    }

}
