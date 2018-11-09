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
        return [
            'titulo'=>$this->title,
            'organizacion'=>$this ->organization,
            'usuario'=>$this->user_id,
            'creado'=>$this ->created_at,
            'actualizado'=>$this->update_at,
            'fecha de  finalizado'=>$this->exit_at,
            'proyecto'=>$this ->pp_p_projection_id,
            'valido'=>$this->is_valid,
            'practica'=>$this->is_practice,
            'salida'=>$this->is_exit
            
            ]; 

    }
}
