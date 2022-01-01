<?php

namespace App\Actions;


use App\Repositories\ActivityRepository;
use App\Repositories\Criteria\Common\Where;
use App\Traits\Newable;

class VerifyIsLate
{
    use Newable;

    public function execute($projectId, $finishDate)
    {
        return ActivityRepository::new()->pushCriteria([
            new Where('project_id', $projectId),
            new Where('finish_date', '>', $finishDate),
        ])->exists() ? "Sim" : "Não";
    }
}
