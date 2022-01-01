<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProjectRequest;
use App\Http\Resources\ProjectResource;
use App\Models\Project;
use App\Repositories\Criteria\Common\OrderBy;
use App\Repositories\ProjectRepository;

class ProjectController extends Controller
{
    public function index()
    {
        $projects = ProjectRepository::new()->pushCriteria(new OrderBy('updated_at', 'desc'))->all();

        return response()->json(ProjectResource::collection($projects));
    }

    public function show(Project $project)
    {
        return response()->json(ProjectResource::make($project));
    }

    public function store(ProjectRequest $request)
    {
        $data = $request->validated();
        $project = ProjectRepository::new()->create($data['project']);

        return response()->json($project, 201);
    }

    public function update($id, ProjectRequest $request)
    {
        $data = $request->validated();
        $project = ProjectRepository::new()->update($id, $data['project']);

        return response()->json($project);
    }
}
