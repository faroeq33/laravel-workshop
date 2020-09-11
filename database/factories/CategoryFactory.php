<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\CategoryFactory;
use Faker\Generator as Faker;

$factory->define(CategoryFactory::class, function (Faker $faker) {
    return [
        'name'=> $faker->name,
        'created_at'=> $faker->dateTimeThisDecade('now', 'Europe/Amsterdam'),
        'updated_at'=> $faker->dateTimeThisDecade('now', 'Europe/Amsterdam')
    ];
});
