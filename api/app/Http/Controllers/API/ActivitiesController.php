<?php

namespace App\Http\Controllers\API;

use App\Models\Project;
use App\Http\Controllers\Controller;
use App\Http\Resources\ActivityResource;

class ActivitiesController extends Controller
{
    public function index(Project $project)
    {
        $activities = $project->activities;

        return response()->json(ActivityResource::collection($activities));
    }
}
