<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class Reviser extends JsonResource
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
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
            'user_id'=>$this->user_id,
            'pp_projection_id'=>$this->pp_projecction_id
            
        ];
    }
}
