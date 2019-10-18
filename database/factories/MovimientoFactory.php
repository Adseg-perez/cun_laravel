<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Movimiento;
use Faker\Generator as Faker;

$factory->define(App\Models\Movimiento::class, function (Faker $faker) {
    return [
        'movimiento' => $faker->jobTitle,
        'fecha' => $faker->date,
        'cuenta_id' => function() {
        	return factory(App\Models\Cuenta::class)->create()->id;
        }
    ];
});
