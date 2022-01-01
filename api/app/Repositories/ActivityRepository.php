<?php

namespace App\Repositories;

use App\Models\Activity;
use App\Traits\Newable;

class ActivityRepository extends Repository
{
    use Newable;

    protected function getClass()
    {
        return Activity::class;
    }
}
