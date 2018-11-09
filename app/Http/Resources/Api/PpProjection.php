<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class PpProjection extends JsonResource
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
            
        'title'=>$this->title,
        'organization'=>$this->organization,
        'created_at'=>$this->created_at,
        'updated_at'=>$this->updated_at,
        'exit_at'=>$this->exit_at,
        'is_exit'=>$this->is_exit,
        'is_practice'=>$this->is_practice,
        'user_id'=>$this->user_id, 
        'created_at'=>$this->created_at,
        'user_id'=>$this->user_id,
        'pp_projection_id'=>$this->pp_projecction_id
        
    ]; 
    }
}
