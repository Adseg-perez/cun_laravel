<?php

use App\Model;
use Faker\Generator as Faker;

$factory->define(App\Models\Persona::class, function (Faker $faker) {
    return [
        'nombre' =>$faker->firstName($gender = null|'male'|'female'),
        'apellido'=>$faker->lastName,
        'telefono'=>$faker->phoneNumber
    ];
});
