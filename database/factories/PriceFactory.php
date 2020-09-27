<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Price;
use App\Product;
use Faker\Generator as Faker;

$factory->define(Price::class, function (Faker $faker) {
    return [
        'name' => $faker->randomFloat(2, 2, 6),
        'description' => $faker->dateTime,
        'product_id' => Product::all()->random()->id
    ];
});