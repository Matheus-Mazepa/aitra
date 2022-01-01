<?php

namespace App\Repositories\Criteria\Common;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Repository;

class WhereNull extends Criteria
{
    private $field;

    public function __construct($field)
    {
        $this->field = $field;
    }

    public function apply($queryBuilder, Repository $repository)
    {
        return $queryBuilder->whereNull($this->field);
    }
}
