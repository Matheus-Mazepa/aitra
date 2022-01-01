<?php

namespace App\Repositories\Criteria\Common;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Repository;

class With extends Criteria
{
    /**
     * Arguments for with clause
     * @var array
     */
    private $arguments;

    public function __construct()
    {
        $this->arguments = func_get_args();
    }

    public function apply($queryBuilder, Repository $repository)
    {
        return $queryBuilder->with(...$this->arguments);
    }
}
