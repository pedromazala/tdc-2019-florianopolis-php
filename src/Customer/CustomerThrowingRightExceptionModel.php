<?php

namespace Liskov\Customer;

use Liskov\Customer\Exception\CustomerFirstNameLengthException;
use Liskov\Customer\Exception\CustomerLastNameLengthException;
use Liskov\General\Name\NameModel;

class CustomerThrowingRightExceptionModel extends CustomerModel
{

    public function __construct(NameModel $nameModel)
    {
        $this->validateName($nameModel);
        parent::__construct($nameModel);
    }

    private function validateName(NameModel $nameModel): void
    {
        if (strlen($nameModel->getFirstName()) <= 3) {
            throw new CustomerFirstNameLengthException();
        }
        if (strlen($nameModel->getLastName()) <= 3) {
            throw new CustomerLastNameLengthException();
        }
    }
}
