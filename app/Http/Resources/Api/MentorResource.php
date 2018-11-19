<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class MentorResource extends JsonResource
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
            
            'usuario'=>$this->user_id,
          
            'proyecto'=>$this ->pp_p_projections_id,
            'valido'=>$this->is_valid
            ]; 
    }
}
