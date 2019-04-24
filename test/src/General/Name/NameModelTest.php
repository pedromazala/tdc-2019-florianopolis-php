<?php

namespace Test\Liskov\General\Name;

use Liskov\General\Name\NameModel;
use PHPUnit\Framework\Assert;
use PHPUnit\Framework\TestCase;

class NameModelTest extends TestCase
{
    public function testNameModelValues(): void
    {
        $name = new NameModel("first", "last");

        Assert::assertEquals("first", $name->getFirstName());
        Assert::assertEquals("last", $name->getLastName());
    }
}
