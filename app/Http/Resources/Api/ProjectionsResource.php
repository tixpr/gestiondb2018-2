<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ProjectionsResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'Titulo' => $this->title,
            'organizacion' => $this->organization,
            'salida' => $this->exit_at,
            'es_salida' => $this->is_exit,
            'es_practico' => $this->is_practice,
            'usuario_id'=>$this->user_id,
        ];
    }
}
