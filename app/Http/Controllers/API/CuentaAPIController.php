<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Cuenta;
use App\Http\Resources\CuentaResource;

class CuentaAPIController extends Controller
{
    public function index(){
		$result=Cuenta::all();
		return CuentaResource::collection($result);
	}
    
    public function movimiento_cuenta(){
		$result=Cuenta::all();
		return CuentaResource::collection($result);
	}

	public function edit($id){
		$result=Cuenta::find($id);
		return new CuentaResource($result);
	}
}
