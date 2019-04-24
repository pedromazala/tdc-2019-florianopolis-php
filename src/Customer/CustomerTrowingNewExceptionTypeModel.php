<?php

namespace Liskov\Customer;

use Liskov\General\Name\NameModel;

class CustomerTrowingNewExceptionTypeModel extends CustomerModel
{
    public function __construct(NameModel $nameModel)
    {
        $this->validateName($nameModel);
        parent::__construct($nameModel);
    }

    private function validateName(NameModel $nameModel): void
    {
        if (strlen($nameModel->getFirstName()) <= 3) {
            throw new \Exception("First name should be grater than 3");
        }
        if (strlen($nameModel->getLastName()) <= 3) {
            throw new \Exception("Last name should be grater than 3");
        }
    }
}
