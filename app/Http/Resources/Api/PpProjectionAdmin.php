<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class PpProjectionAdmin extends JsonResource
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
            'titulo' => $this->title,
            'organizacion' => $this->organization,
            'creado' => $this->created_at,
            'actualizado' => $this->update_at,
            'fecha_finalizada' => $this->exit_at,
            'salida_final' => $this->is_exit,
            'practica' => $this->is_practice,
            'usuario' => $this->user_id
        ];
    }
}
