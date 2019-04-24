<?php

namespace Liskov\Customer\Exception;

class CustomerFirstNameLengthException extends CustomerNameException
{
    protected function exceptionMessage(): string
    {
        return "First name should be grater than 3";
    }
}
