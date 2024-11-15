<?php

namespace App\Admin\Domain\Usecases\Social;

use App\Admin\Domain\Repository\SocialNetworkRepository;

readonly class GetAll
{

    public function __construct(
        private SocialNetworkRepository $repository
    )
    {
    }

    public function run(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->repository->getAll();
    }

}
