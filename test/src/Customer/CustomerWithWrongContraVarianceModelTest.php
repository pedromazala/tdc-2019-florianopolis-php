<?php

namespace Test\Liskov\Customer;

use Liskov\Customer\CustomerWithWrongContraVarianceModel;
use Liskov\General\Name\NameModel;

class CustomerWithWrongContraVarianceModelTest extends CustomerModelTest
{
    protected function createCustomerModelInstance(NameModel $name)
    {
        return new CustomerWithWrongContraVarianceModel($name);
    }
}
