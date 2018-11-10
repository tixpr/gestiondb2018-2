<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class MentorsResource extends JsonResource
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
            'creado' => $this->created_at,
            'usuario_id'=>$this->user_id,
            'proyeccion_id'=>$this->pp_projection_id,
        ];
    }
}
