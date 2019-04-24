<?php

namespace Liskov\General\Name;

class NameWithMiddleModel extends NameModel
{
    /**
     * @var string
     */
    private $middle_name;

    public function __construct(string $first_name, string $middle_name, string $last_name)
    {
        parent::__construct($first_name, $last_name);
        $this->middle_name = $middle_name;
    }

    public function getMiddleName(): string
    {
        return $this->middle_name;
    }
}
