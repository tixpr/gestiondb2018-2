<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class UserAdmin extends JsonResource
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
            'name'          => $this->username,
            'correo'        => $this->email,
            'creado'        => $this->created_at,
            'actualizado'   => $this->updated_at,
            'validado'      => $this->is_valid
        ];
    }
}
