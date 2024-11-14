<?php

namespace App\Profile\Domain\Usecases;

use App\Profile\Domain\Models\Address;
use App\Profile\Domain\Repository\AddressRepository;

readonly class AddAddress
{

    public function __construct(private AddressRepository $repository)
    {
    }

    public function run(array $data): Address
    {
        return $this->repository->addAddress($data);
    }

}
