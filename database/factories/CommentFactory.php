<?php

use Faker\Generator as Faker;

$factory->define(App\Comment::class, function (Faker $faker) {
    return [
        'content' => $faker->text,
        'user_id' => rand(1, 5),
        'blog_id' => rand(1, 5)
    ];
});
