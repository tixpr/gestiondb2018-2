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
        return[
        'usuario'  =>$this->user_id,
        'proyecto'=>$this->pp_projection_id,
        'creado'=>$this->created_at,
        'actualizado'=>$this->updated_at,
        ];
        
    }
}
