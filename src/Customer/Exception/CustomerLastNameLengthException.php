<?php

namespace Liskov\Customer\Exception;

class CustomerLastNameLengthException extends CustomerNameException
{
    protected function exceptionMessage(): string
    {
        return "Last name should be grater than 3";
    }
}
