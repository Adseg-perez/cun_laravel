<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{ 
    protected $primaryKey='id';
   	protected $table='personas';
    protected $fillable = ['nombre','apellido', 'telefono'];
    protected $hidden = ['created_at','updated_at'];

    public function corazon(){
    	return $this->hasOne('App\Models\Corazon');
    } 
}
 