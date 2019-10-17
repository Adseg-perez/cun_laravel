<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Models\Blog;
use Faker\Generator as Faker;

$factory->define(App\Models\Blog::class, function (Faker $faker) {
    return [
        'titulo' =>$faker->company,
        'contenido' =>$faker->text($maxNbChars = 100)
    ];
});
