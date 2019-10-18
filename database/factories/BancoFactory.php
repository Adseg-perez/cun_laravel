<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Banco;
use Faker\Generator as Faker;

$factory->define(App\Models\Banco::class, function (Faker $faker) {
    return [
        'nombrebanco' =>$faker->company,
        'telefono' =>$faker->tollFreePhoneNumber
    ];
});

