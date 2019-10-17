<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    protected $primaryKey='id';

   	protected $table='videos';

    protected $fillable = ['nombre', 'duracion','formato'];

    protected $hidden = ['created_at','updated_at'];

    public function comentarios(){
    	return $this->morphMany('App\Models\Comentario', 'comentable');
    }

}