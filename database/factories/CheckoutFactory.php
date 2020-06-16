<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Checkout;
use Faker\Generator as Faker;

$factory->define(Checkout::class, function (Faker $faker) {
  return [
    'patron_id' => rand(7, 9),
    'book_id' => rand(1, 5),
    'dueDate' => $faker->dateTimeInInterval($startDate = "0 years", $interval = '+ 5 days', $timezone = null)
  ];
});
