<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Movimiento extends Model
{
    protected $primaryKey='id';
   	protected $table='movimientos';
    protected $fillable = ['id', 'movimiento', 'fecha', 'cuenta_id'];
    protected $hidden = ['created_at','updated_at'];

    public function cuenta(){
    	return $this->belongsTo('App\Models\Cuenta', 'cuenta_id');
    }
}
