<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\division;
use Faker\Generator as Faker;

$factory->define(division::class, function (Faker $faker) {
    return [
        "nombre" => $faker->unique()->sentence,
        "embajador" => $faker->name,
        "nivel" => $faker->numberBetween(1, 5),
        "integrantes"=> $faker->numberBetween(1, 10),
        "id_sup" => App\division::all()->random()->id        
    ];
});
