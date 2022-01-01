<?php

namespace App\Repositories\Criteria\Common;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Repository;

class Has extends Criteria
{
    private $relation;

    public function __construct($relation)
    {
        $this->relation = $relation;
    }
    public function apply($queryBuilder, Repository $repository)
    {
        return $queryBuilder->has($this->relation);
    }
}
