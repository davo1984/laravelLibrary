<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\patron;
use Faker\Generator as Faker;

$factory->define(patron::class, function (Faker $faker) {
    return [
      'name' => $faker->name,
      'email' => $faker->unique()->safeEmail,
      'dob' => $faker->dateTimeInInterval($startDate = '-30 years', $interval = '+ 5 days', $timezone = null),
      'street' => $faker->streetAddress,
      'city' => $faker->city,
      'zip' => $faker->postcode
    ];
});
