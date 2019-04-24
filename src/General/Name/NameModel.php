<?php

namespace Liskov\General\Name;

class NameModel
{
    /**
     * @var string
     */
    private $first_name;
    /**
     * @var string
     */
    private $last_name;

    public function __construct(string $first_name, string $last_name)
    {
        $this->first_name = $first_name;
        $this->last_name = $last_name;
    }

    public function getFirstName(): string
    {
        return $this->first_name;
    }

    public function getLastName(): string
    {
        return $this->last_name;
    }
}
