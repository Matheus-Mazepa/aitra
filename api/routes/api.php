<?php

use App\Http\Controllers\API\ActivitiesController;
use App\Http\Controllers\API\ProjectController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Auth::routes();

Route::middleware('auth:sanctum')->group(function () {
    Route::get('projects', [ProjectController::class, 'index']);
    Route::get('projects/{project}', [ProjectController::class, 'show']);
    Route::post('projects', [ProjectController::class, 'store']);
    Route::put('projects/{id}', [ProjectController::class, 'update']);

    Route::get('projects/{project}/activities', [ActivitiesController::class, 'index']);
    Route::get('projects/{project}/activities/{activity}', [ActivitiesController::class, 'show']);
    Route::post('projects/{project}/activities', [ActivitiesController::class, 'store']);
    Route::put('projects/{project}/activities/{id}', [ActivitiesController::class, 'update']);
});
