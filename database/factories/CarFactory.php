<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Car;
use Faker\Generator as Faker;

$brand= [
    "Mercedes",
    "AUDI",
    "BMW",
    "FIAT",
    "FORD",
    "SEAT"
    ];
$factory->define(Car::class, function (Faker $faker) use ($brand) {
    return [
        'name' => $brand[array_rand($brand)],
        'color'=> $faker->colorName,
        'player_id'=>rand(1, 100)
    ];
});
