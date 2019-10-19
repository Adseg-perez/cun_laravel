<?php

namespace App\Http\Controllers;

use App\Models\Corazon;
use App\Models\Persona;
use Illuminate\Http\Request;


class CorazonController extends Controller
{

	public function index(){

		//7FS7w5khuMqP85vNqQWQ1rxI2150FwhPozOe0dKI

	}
    
    public function store(Request $request){
        

        $corazon = new Corazon;
        $corazon->peso = $request->peso;
        $corazon->estado = $request->estado;
        $corazon->persona_id = $request->persona_id;
        $corazon->save();
        
        return $corazon;
    }
}