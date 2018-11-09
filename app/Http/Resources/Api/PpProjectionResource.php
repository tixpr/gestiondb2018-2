<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class PpProjectionResource extends JsonResource
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
            'creado'      => $this->created_at,
            'actualizado' => $this->updated_at,
            'fecha_finalizado' => $this->exit_at,
            'culminacion' => $this->is_exit,
            'practica_realizada' => $this->is_practice,
            'usuario_id'    => $this->user_id,
        ];
    }
}
