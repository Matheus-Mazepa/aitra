<?php

namespace App\Http\Resources;

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
            'start_date' => format_date($this->start_date, 'd/m/Y'),
            'finish_date' => format_date($this->finish_date, 'd/m/Y'),
            'created_at' => format_date($this->created_at),

            'links' => [
            ],
        ];
    }
}
