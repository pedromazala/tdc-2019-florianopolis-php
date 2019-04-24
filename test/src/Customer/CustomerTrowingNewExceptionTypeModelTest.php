<?php

namespace Test\Liskov\Customer;

use Liskov\Customer\CustomerTrowingNewExceptionTypeModel;
use Liskov\General\Name\NameModel;

class CustomerTrowingNewExceptionTypeModelTest extends CustomerModelTest
{
    protected function createCustomerModelInstance(NameModel $name)
    {
        return new CustomerTrowingNewExceptionTypeModel($name);
    }
}
