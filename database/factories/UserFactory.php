<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'username' => $faker->username,
        'password' => bcrypt('password'),
        'bio' => $faker->sentence(10),
        'remember_token' => str_random(10)
    ];
});
