<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Todo;
use Faker\Generator as Faker;

$factory->define(\App\Todo::class, function (Faker $faker) {
    return [
        'name'=>$faker->sentence(3),
        'description'=>$faker->paragraph(5),
        'completed'=>false
    ];
});
