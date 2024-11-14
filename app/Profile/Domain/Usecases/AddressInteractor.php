<?php

namespace App\Profile\Domain\Usecases;

use App\Profile\Domain\Repository\AddressRepository;

class AddressInteractor
{

    public function __construct(
        public AddAddress $addAddress,
        public GetCustomerAddresses $getCustomerAddresses,
        public UpdateAddress $updateAddress
    ){}

    static public function build(AddressRepository $repository): AddressInteractor{
        return new AddressInteractor(
            new AddAddress($repository),
            new GetCustomerAddresses($repository),
            new UpdateAddress($repository)
        );
    }

}
