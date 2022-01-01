<?php

namespace App\Repositories\Criteria\Common;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Repository;

class WhereIn extends Criteria
{
    private $field;
    private $values;

    public function __construct($field, $values)
    {
        $this->field = $field;
        $this->values = $values;
    }

    public function apply($queryBuilder, Repository $repository)
    {
        return $queryBuilder->whereIn($this->field, $this->values);
    }
}
