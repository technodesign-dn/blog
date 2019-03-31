<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        'title' => substr($faker->realText($maxNbChars = 50, $indexSize = 2), 0, -1),
        'content' => $faker->realText($maxNbChars = 1000, $indexSize = 2),
        'user_id' => function () {
            return App\User::inRandomOrder()->first();
        }
    ];
});