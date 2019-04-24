<?php

namespace Test\Liskov\Customer;

use Liskov\Customer\CustomerModel;
use Liskov\Customer\Exception\CustomerNameException;
use Liskov\General\Name\NameModel;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class CustomerModelTest extends TestCase
{
    public function testCustomerModel_withFulfilledData(): void
    {
        $name = new NameModel("first", "last");
        $customer = $this->createCustomerModelInstance($name);

        Assert::assertEquals("first", $customer->getFirstName());
        Assert::assertEquals("last", $customer->getLastName());
    }

    public function testCustomerModel_withMissingFirstName(): void
    {
        $name = new NameModel("", "last");

        $this->expectException(CustomerNameException::class);
        $customer = $this->createCustomerModelInstance($name);
    }

    public function testCustomerModel_withMissingLastName(): void
    {
        $name = new NameModel("first", "");

        $this->expectException(CustomerNameException::class);
        $customer = $this->createCustomerModelInstance($name);
    }

    protected function createCustomerModelInstance(NameModel $name)
    {
        $customer = new CustomerModel($name);
        return $customer;
    }
}
