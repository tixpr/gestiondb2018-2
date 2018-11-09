<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ReportResource extends JsonResource
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
            'creado'=>$this ->created_at,
            'actualizado'=>$this->updated_at,
            'tipo'=>$this->tipo,
            
           
            'proyecto'=>$this ->pp_p_projection_id,
            'valido'=>$this->is_valid
            ]; 
    }
}
