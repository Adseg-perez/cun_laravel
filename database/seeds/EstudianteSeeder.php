<?php

use App\Models\Estudiante;
use App\Models\Materia;
use Illuminate\Database\Seeder;

class EstudianteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //guardar las notas que perteneceran al estudiante
        factory(App\Models\Estudiante::class, 5)->create();
        factory(App\Models\Nota::class, 5)->create();
    }
}
