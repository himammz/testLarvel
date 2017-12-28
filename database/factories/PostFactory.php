<?php

use Faker\Generator as Faker;

$factory->define(App\Post::class, function (Faker $faker) {
    return [
        //
        'title' => $faker->slug,
        'desc' => $faker->text(50)
    ];
});
