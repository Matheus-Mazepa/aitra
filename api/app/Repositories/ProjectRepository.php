<?php

namespace App\Repositories;

use App\Models\Project;
use App\Traits\Newable;

class ProjectRepository extends Repository
{
    use Newable;

    protected function getClass()
    {
        return Project::class;
    }
}
