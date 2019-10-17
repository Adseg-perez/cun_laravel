<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    protected $primaryKey='id';

   	protected $table='blogs';

    protected $fillable = ['titulo', 'contenido'];

    protected $hidden = ['created_at','updated_at'];

    public function comentarios(){
    	return $this->morphMany('App\Models\Comentario', 'comentable');
    }

}