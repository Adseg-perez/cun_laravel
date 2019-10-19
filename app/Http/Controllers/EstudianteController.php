<?php

namespace App\Http\Controllers;

use App\Models\Estudiante;
use App\Models\Nota;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    //SzmB2iOkkwCVrakQyUhWDPE0J3fqcySJnYehRV3h

    //método que permite insertar datos con attach
    public function storeAttach(Request $request){
        $estudiante = Estudiante::find(1);
        $nota = Nota::all()->pluck('id')->toArray();
        $estudiante->notas()->attach($nota);
        return $estudiante->notas;
    }

    //método que permite insertar datos con el sync
    public function storeSync(Request $request){
        $estudiante = Estudiante::find(1);
        $nota = Nota::all()->pluck('id')->toArray();
        $estudiante->notas()->sync($nota);
        return $estudiante->notas;
    }
}