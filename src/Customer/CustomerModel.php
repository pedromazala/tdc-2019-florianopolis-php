<?php

namespace Liskov\Customer;

use Liskov\Customer\Exception\CustomerNameMissingException;
use Liskov\General\Name\NameModel;

class CustomerModel
{
    /**
     * @var NameModel
     */
    private $nameModel;

    public function __construct(NameModel $nameModel)
    {
        $this->validateName($nameModel);
        $this->nameModel = $nameModel;
    }

    public function getFirstName(): string
    {
        return $this->nameModel->getFirstName();
    }

    public function getLastName(): string
    {
        return $this->nameModel->getLastName();
    }

    private function validateName(NameModel $nameModel): void
    {
        if (empty($nameModel->getFirstName()) || empty($nameModel->getLastName())) {
            throw new CustomerNameMissingException();
        }
    }
}
