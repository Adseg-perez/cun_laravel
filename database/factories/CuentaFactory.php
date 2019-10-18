<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Cuenta;
use Faker\Generator as Faker;

$factory->define(App\Models\Cuenta::class, function (Faker $faker) {
    return [
        'saldo' => $faker->randomFloat($nbMaxDecimals = 2, $min = 0, $max = NULL),
        'estado' => $faker->boolean,
        'banco_id' => function() {
        	return factory(App\Models\Banco::class)->create()->id;
        }
    ];
});
