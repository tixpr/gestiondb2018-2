<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectionResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return[
            'titulo'         => $this->title,
            'organizacion'         => $this->organization,
            'creado'         => $this->created_at,
            'actualizado'    => $this->updated_at,
            'finalizado'       => $this->exit_at,
            'culminzacion'       => $this->is_vais_exit,
            'practica'       => $this->is_practice,
            'usuario'       => $this->user_id
        ];
    }
}
