<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class MovimientoResource extends JsonResource
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
            'id'=>$this->id,
            'movimiento'=>$this->movimiento,
            'fecha'=>$this->fecha,
            'cuenta_id'=>$this->cuenta_id
        
        ];
    }
}
