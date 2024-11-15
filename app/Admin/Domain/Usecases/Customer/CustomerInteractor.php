<?php

namespace App\Admin\Domain\Usecases\Customer;

use App\Admin\Domain\Repository\CustomerRepository;

class CustomerInteractor
{

    public function __construct(
        public GetCustomers $getCustomers
    )
    {
    }

    static public function build(CustomerRepository $repository): CustomerInteractor
    {
        return new CustomerInteractor(
            new GetCustomers($repository)
        );
    }

}
