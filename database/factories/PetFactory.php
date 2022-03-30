<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Pet;
use Faker\Generator as Faker;

$factory->define(Pet::class, function (Faker $faker) {
    return [
        'name'       => $faker->firstName,
        'color_name' => $faker->colorName,
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'people_id'=> $faker->numberBetween($min = 1, $max = 150)
    ];
});
