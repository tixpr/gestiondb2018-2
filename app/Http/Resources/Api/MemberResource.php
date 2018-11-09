<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class MemberResource extends JsonResource
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
            
            
            'usuario'=>$this->user_id,
            'proyecto'=>$this ->pp_p_projection_id,
            'valido'=>$this->is_valid
            ]; 

    }
}
