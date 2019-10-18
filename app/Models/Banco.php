<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Banco extends Model
{
    protected $primaryKey='id';
   	protected $table='bancos';
    protected $fillable = ['id', 'nombrebanco', 'telefono'];
    protected $hidden = ['created_at','updated_at'];

    public function cuentas(){
    	return $this->hasMany('App\Models\Cuenta');
    }

    //relacion con Through
    public function movimientos(){
        return $this->hasManyThrough('App\Models\Movimiento', 'App\Models\Cuenta');
    }
}
