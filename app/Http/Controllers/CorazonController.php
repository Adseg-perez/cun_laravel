<?php

namespace App\Http\Controllers;

use App\Models\Corazon;
use App\Models\Persona;
use Illuminate\Http\Request;
use App\Http\Requests\CorazonRequest;


class CorazonController extends Controller
{

    public function store(CorazonRequest $request){
        
        $data=$request->all();
        return $data;
}
    /*    $corazon = new Corazon;
        $corazon->peso = $request->peso;
        $corazon->estado = $request->estado;
        $corazon->persona_id = $request->persona_id;
        $corazon->save();
        
        return $corazon;*/
    
}