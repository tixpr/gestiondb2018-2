<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ReviserResource extends JsonResource
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
            'creado'        =>$this->created_at,
            'actualizado'   =>$this->updated_at,
            'proyeccion'    =>$this->pp_projections_id,
            'usuario'       =>$this->user_id
        ];
    }
}
