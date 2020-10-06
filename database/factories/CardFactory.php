<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\Card;
use Faker\Generator as Faker;

$factory->define(Card::class, function (Faker $faker) {
    return [
      'title' => $faker -> word(),
      'subtitle' => $faker -> word(),
      'release' => $faker -> date(),
      'type' => $faker -> word(),
      'availability' => $faker -> numberBetween($min = 0, $max = 1),
      'cost' => $faker -> numberBetween($min = 1, $max = 5000),
    ];
});
