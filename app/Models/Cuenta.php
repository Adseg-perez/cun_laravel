<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cuenta extends Model
{
    protected $primaryKey='id';
   	protected $table='cuentas';
    protected $fillable = ['id', 'saldo', 'estado', 'banco_id'];
    protected $hidden = ['created_at','updated_at'];

    public function movimientos(){
    	return $this->hasMany('App\Models\Movimiento');
    }

    public function banco(){
    	return $this->belongsTo('App\Models\Banco', 'banco_id');
    }
}
