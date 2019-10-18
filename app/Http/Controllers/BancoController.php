<?php

namespace App\Http\Controllers;

use App\Models\Banco;
use Illuminate\Http\Request;

class BancoController extends Controller
{
    public function index()
    { 
        $banco = Banco::find(1);
        return $banco->movimientos;

    }
}
