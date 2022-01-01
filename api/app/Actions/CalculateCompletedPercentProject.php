<?php

namespace App\Actions;


use App\Repositories\ActivityRepository;
use App\Repositories\Criteria\Common\Where;
use App\Traits\Newable;

class CalculateCompletedPercentProject
{
    use Newable;

    public function execute($projectId)
    {
        $totalActivities = ActivityRepository::new()->pushCriteria([
            new Where('project_id', $projectId)
        ])->count();

        if (!$totalActivities)
            return "Sem atividades cadastradas";

        $totalCompletedActivities = ActivityRepository::new()->pushCriteria([
            new Where('project_id', $projectId),
            new Where('is_finished', true),
        ])->count();

        return intval($totalCompletedActivities * 100 / $totalActivities) . '%';
    }
}
