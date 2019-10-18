<?php

namespace App\Http\Controllers;

use App\Models\Cliente;
use App\Models\Pedido;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    public function index()
    {
    	/*return csrf_token();
    	7FS7w5khuMqP85vNqQWQ1rxI2150FwhPozOe0dKI*/
        $cliente = Cliente::find(1);
        return $cliente;
    }
    //método que permite guardar con saveMany
    public function store(Request $request){
        $cliente = Cliente::find(1);
        $fecha = new \Carbon\Carbon();
        $cliente->pedidos()->saveMany([
            new Pedido([
                'fecha' => $fecha->format('Y-m-d'),
                'cliente_id' => Cliente::inRandomOrder()->value('id'),
            ]),
            new Pedido([
                'fecha' => $fecha->format('Y-m-d'),
                'cliente_id' => Cliente::inRandomOrder()->value('id'),
            ])
        ]);
        return $cliente->pedidos;
    }
    //método que permite guardar con create many
    public function guardar(Request $request)
    {
        $cliente = Cliente::find(1);
        $fecha = new \Carbon\Carbon();
        $cliente->pedidos()->createMany([
            [
                'fecha' => $fecha->format('Y-m-d'),
                'cliente_id' => Cliente::inRandomOrder()->value('id'), 
            ],
            [
                'fecha' => $fecha->format('Y-m-d'),
                'cliente_id' => Cliente::inRandomOrder()->value('id'),
            ]
        ]);
        return $cliente->pedidos;
    }
}
