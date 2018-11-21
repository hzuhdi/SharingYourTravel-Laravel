<?php

use Faker\Generator as Faker;

$fillable = ['title', 'content', 'image', 'countries'];

$factory->define(App\Blog::class, function (Faker $faker) {
    return [
        'title' => $faker->sentence(6),
        'content' => $faker->text,
        'image' => null,
        'countries' => $faker->randomElement(['South America', 'North America', 'Europe', 'Middle East', 'Asia']),
        'user_id' => rand(1, 5)
    ];
});
