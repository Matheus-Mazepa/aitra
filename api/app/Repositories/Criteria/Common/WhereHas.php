<?php

namespace App\Repositories\Criteria\Common;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Repository;

class WhereHas extends Criteria
{
    private $args = [];

    public function __construct()
    {
        $this->args = func_get_args();
    }

    public function apply($queryBuilder, Repository $repository)
    {
        return $queryBuilder->whereHas(...$this->args);
    }
}
