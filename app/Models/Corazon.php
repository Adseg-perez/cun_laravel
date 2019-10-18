<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Corazon extends Model
{
    protected $primaryKey='id';
   	protected $table='corazones';
    protected $fillable = ['peso', 'estado', 'persona_id'];
    protected $hidden = ['created_at','updated_at'];

   public function persona(){
    	return $this->belongsTo('App\Models\Persona', 'persona_id');
    }
} 
