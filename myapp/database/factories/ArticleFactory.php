<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Article as Article;
use Faker\Generator as Faker;

$factory->define(Article::class, function (Faker $faker) {
    return [
        'model' => $faker->firstName,
        'prize' => $faker->numberBetween(50, 150),
        'description' => $faker->text,
    ];
});
