<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Cliente;
use Faker\Generator as Faker;

$factory->define(App\Models\Cliente::class, function (Faker $faker) {
    return [
        'nombres'=>$faker->firstName,
        'apellidos'=>$faker->lastName,
        'telefono'=>$faker->phoneNumber
    ];
});
