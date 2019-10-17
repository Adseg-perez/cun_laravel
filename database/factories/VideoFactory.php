<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Video;
use Faker\Generator as Faker;

$factory->define(App\Models\Video::class, function (Faker $faker) {
    return [
        'nombre' =>$faker->company,
        'duracion' =>$faker->time($format = 'i:s', $max = 'now'),
        'formato' =>$faker->fileExtension
    ];
});
