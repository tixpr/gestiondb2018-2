<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class PpReportAdmin extends JsonResource
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
            'tipo' => $this->type,
            'creado' => $this->created_at,
            'actualizado' => $this->update_at,
            'proyecto' => $this->pp_projection_id
        ];
    }
}
