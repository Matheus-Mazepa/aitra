<?php
namespace App\Repositories\Criteria\Common;

use App\Repositories\Criteria\Criteria;
use App\Repositories\Repository;

class WithTrashedCriteria extends Criteria
{
    public function apply($queryBuilder, Repository $repository)
    {
        return $queryBuilder->withTrashed();
    }
}
