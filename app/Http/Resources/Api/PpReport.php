<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class PpReport extends JsonResource
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
            'type'=>$this->type,
            'created_at'=>$this->created_at,
            'updated_at'=>$this->updated_at,
            'pp_projection_id'=>$this->pp_projecction_id
            
        ];
    }
}
