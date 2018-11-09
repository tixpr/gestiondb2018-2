<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class PpReviserResurce extends JsonResource
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
            'creado'    =>  $this->created_at,
            'actualizado'=> $this->updated_at,
            'usuario_id'  =>$this ->user_id,
            'proyecto_id'  =>$this ->pp_projection_id,
        ];
    }
}
