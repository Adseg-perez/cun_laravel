<?php

use App\Model;
use App\Models\Persona;
use Faker\Generator as Faker;

$factory->define(App\Models\Persona::class, function (Faker $faker) {
    return [
        'nombre' =>$faker->firstName,
        'apellido'=>$faker->lastName,
        'telefono'=>$faker->phoneNumber
    ];
});
