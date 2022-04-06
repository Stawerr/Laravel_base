<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Person;
use Faker\Generator as Faker;

$factory->define(Person::class, function (Faker $faker) {
    return [
        'name'       => $faker->name,
        'date_of_birth' => $faker->date($format = 'Y-m-d', $max = 'now'),
        'email' => $faker->unique()->safeEmail,
        'address_id' => rand(1, 200)
    ];
});
