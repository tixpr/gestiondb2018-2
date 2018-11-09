<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class PpReportResurce extends JsonResource
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
            'Tipo'    =>  $this->type,
            'creado'    =>  $this->created_at,
            'actualizado'=> $this->updated_at,
            'proyecto_id'  =>$this ->pp_projection_id,
        ];
    }
}
