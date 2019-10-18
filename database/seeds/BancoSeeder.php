<?php

use Illuminate\Database\Seeder;

class BancoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $banco = factory(App\Models\Banco::class, 5)
        ->create()
        ->each(function($banco){
            $cuenta=factory(App\Models\Cuenta::class)->make();
            $banco->cuentas()->save($cuenta);
            $cuenta->movimientos()->save(factory(App\Models\Movimiento::class)->make());
        });
    }
}
