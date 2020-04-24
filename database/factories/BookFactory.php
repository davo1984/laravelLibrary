<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\book;
use Faker\Generator as Faker;

$factory->define(book::class, function (Faker $faker) {
  Book::create();
  return [
        'title' => $faker->sentence,
        'author' => $faker->name
    ];
});
