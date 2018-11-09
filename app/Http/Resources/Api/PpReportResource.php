<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class PpReportResource extends JsonResource
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
            'actualizado' => $this->updated_at,
            'proyeccion_id' => $this->pp_projection_id,
        ];
    }
}
