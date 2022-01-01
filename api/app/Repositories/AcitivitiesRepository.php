<?php

namespace App\Repositories;

use App\Models\Activities;
use App\Traits\Newable;

class AcitivitiesRepository extends Repository
{
    use Newable;

    protected function getClass()
    {
        return Activities::class;
    }
}
