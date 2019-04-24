<?php

namespace Liskov\Customer;

use Liskov\General\Name\NameWithMiddleModel;

class CustomerWithWrongContraVarianceModel extends CustomerModel
{
    public function __construct(NameWithMiddleModel $nameModel)
    {
        parent::__construct($nameModel);
    }
}
