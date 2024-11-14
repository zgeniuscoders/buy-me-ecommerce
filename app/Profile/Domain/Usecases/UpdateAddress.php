<?php

namespace App\Profile\Domain\Usecases;

use App\Profile\Domain\Repository\AddressRepository;

readonly class UpdateAddress
{

    public function __construct(private AddressRepository $repository)
    {
    }

    public function run(int $addressId, array $data): void{
        $this->repository->updateAddress($data, $addressId);
    }

}
