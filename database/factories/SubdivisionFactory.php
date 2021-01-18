<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\subdivision;
use Faker\Generator as Faker;

$factory->define(subdivision::class, function (Faker $faker) {
    return [
       "id_division" => App\division::all()->random()->id
    ];
});
