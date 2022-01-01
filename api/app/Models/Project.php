<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'start_date',
        'finish_date',
    ];

    public function activities(): HasMany
    {
        return $this->hasMany(Activity::class, 'project_id', 'id');
    }

    public function getProgressAttributte()
    {
        $totalActivities = $this->activities()->count();
        $totalActivitiesCompleted = $this->activities()->where('is_finished', true)->count();

        return ($totalActivitiesCompleted * 100) / $totalActivities;
    }
}

