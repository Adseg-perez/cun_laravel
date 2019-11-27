<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banco;
use App\Http\Resources\BancoResource;

class BancoAPIController extends Controller
{

	public function index(){
		$result=Banco::all();
		return BancoResource::collection($result);
	}
    
    public function cuenta_banco(){
		$result=Banco::all();
		return BancoResource::collection($result);
	}

	public function edit($id){
		$result=Banco::find($id);
		return new BancoResource($result);
	}
}
