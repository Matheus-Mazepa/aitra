<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Resources\ProjectResource;
use App\Models\Project;

class ActivitiesController extends Controller
{
    public function index(Project $project)
    {
        $activities = $project->activities;

        return response()->json(ProjectResource::collection($activities));
    }
}
