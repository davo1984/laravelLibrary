<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Patron;
use Faker\Generator as Faker;

$factory->define(Patron::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'email' => $faker->unique()->safeEmail,
      'dob' => $faker->dateTimeInInterval($startDate = '-30 years', $interval = '+ 5 days', $timezone = null)
    ];
});
