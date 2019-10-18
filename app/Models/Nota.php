<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $primaryKey='id';
   	protected $table='notas';
    protected $fillable = ['nota'];
    protected $hidden = ['created_at','updated_at'];
    
    //relacion muchos a muchos
    public function estudiantes(){
        return $this->belongsToMany('App\Models\Estudiante');
    }
}
