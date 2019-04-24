<?php

namespace Liskov\Customer\Exception;

class CustomerNameMissingException extends CustomerNameException
{
    protected function exceptionMessage(): string
    {
        return "First name or last name are empty";
    }
}
