<?php

namespace App\Repositories\Criteria\Common;

use App\Repositories\Repository;
use App\Repositories\Criteria\Criteria;

class Limit extends Criteria
{
    private $limit;

    public function __construct($limit)
    {
        $this->limit = $limit;
    }
    public function apply($queryBuilder, Repository $repository)
    {
        return $queryBuilder->limit($this->limit);
    }
}
