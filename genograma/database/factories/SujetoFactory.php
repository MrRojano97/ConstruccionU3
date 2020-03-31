<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Sujeto;
use Faker\Generator as Faker;

$factory->define(Sujeto::class, function (Faker $faker) {
    return [
        'nombre'=> $faker->sentence(),
        'apellido'=>$faker ->sentence(),
        'archivoJson'=>$faker->sentence()
    ];
});
