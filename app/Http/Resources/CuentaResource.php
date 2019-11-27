<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class CuentaResource extends JsonResource
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
            'estado'=>$this->estado,
            'saldo'=>$this->saldo,
            'banco_id'=>$this->banco_id,
            'Movimientos'=>MovimientoResource::collection($this->movimientos)
        ];
    }
}
