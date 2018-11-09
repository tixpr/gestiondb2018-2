<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class PpReportsResource extends JsonResource
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
            'tipo'  =>$this->type,
            'proyecto'=>$this->pp_projection_id,
            'creado'=>$this->created_at,
            'actualizado'=>$this->updated_at,
            ];
    }
}
