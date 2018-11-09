<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class MentorResource extends JsonResource
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
            'proyeccion'    =>$this->pp_projections_id,
            'usuario'       =>$this->user_id,
            'creado'        =>$this->created_at
        ];
    }
}
