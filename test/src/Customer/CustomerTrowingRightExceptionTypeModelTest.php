<?php

namespace Test\Liskov\Customer;

use Liskov\Customer\CustomerThrowingRightExceptionModel;
use Liskov\General\Name\NameModel;

class CustomerTrowingRightExceptionTypeModelTest extends CustomerModelTest
{
    protected function createCustomerModelInstance(NameModel $name)
    {
        return new CustomerThrowingRightExceptionModel($name);
    }
}
