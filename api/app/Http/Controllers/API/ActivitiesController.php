<?php

namespace App\Http\Controllers\API;

use App\Models\Activity;
use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Http\Requests\ActivityRequest;
use App\Repositories\ActivityRepository;
use App\Http\Resources\ActivityResource;

class ActivitiesController extends Controller
{
    public function index(Project $project)
    {
        $activities = $project->activities;

        return response()->json(ActivityResource::collection($activities));
    }

    public function show($projectId, Activity $activity)
    {
        return response()->json(ActivityResource::make($activity));
    }

    public function store(Project $project, ActivityRequest $request)
    {
        $data = $request->validated();
        $activity = $project->activities()->create($data['activity']);

        return response()->json($activity, 201);
    }

    public function update($projectId, $id, ActivityRequest $request)
    {
        $data = $request->validated();
        $activity = ActivityRepository::new()->update($id, $data['activity']);

        return response()->json($activity);
    }
}
