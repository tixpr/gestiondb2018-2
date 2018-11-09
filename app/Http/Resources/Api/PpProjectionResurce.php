<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class PpProjectionResurce extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return  [
            'titulo'    =>  $this->title,
            'organizacion'    =>  $this->organization,
            'creado'    =>  $this->created_at,
            'actualizado'=> $this->updated_at,
            'fecha_finalizacion'  =>$this ->exit_at,
            'fecha_culminacion'  =>$this ->is_exit,
            'si_es_practica'  =>$this ->is_practice,
            'usuario_id'  =>$this ->user_id,
        ];
    }
}
