<?php

namespace Liskov\Customer\Exception;

use Throwable;

class CustomerNameException extends \InvalidArgumentException
{
    public function __construct(Throwable $previous = null)
    {
        parent::__construct($this->exceptionMessage(), $previous);
    }

    protected function exceptionMessage(): string
    {
        return "There is a problem with customer name";
    }
}
