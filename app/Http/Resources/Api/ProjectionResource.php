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
            'titulo'            => $this->title,
            'organización'      => $this->organization,
            'creado'        => $this->created_at,
            'actualizado'   => $this->updated_at,
            'practica' => $this->is_practice,

        ];
    }
}
