<?php

namespace App\Http\Resources;

use App\Actions\CalculateCompletedPercentProject;
use App\Actions\VerifyIsLate;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'start_date' => format_date($this->start_date),
            'finish_date' => format_date($this->finish_date),
            'created_at' => format_date($this->created_at, 'd/m/Y H:i'),
            'completed_percent' => CalculateCompletedPercentProject::new()->execute($this->id),
            'is_late' => VerifyIsLate::new()->execute($this->id, $this->finish_date),

            'links' => [
            ],
        ];
    }
}
