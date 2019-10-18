<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Nota;
use Faker\Generator as Faker;

$factory->define(App\Models\Nota::class, function (Faker $faker) {
    return [
        'nota' =>$faker->randomFloat($nbMaxDecimals = 2, $min = 1, $max = 5)
    ];
});
