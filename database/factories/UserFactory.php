<?php

use Faker\Generator as Faker;

$factory->define(App\User::class, function (Faker $faker) {
    return [
        'username' => $faker->username,
        'password' => '$2y$10$1Zu.7wJeuTN37WN.4afMdu2MiHSD67Ejr7J8EA66DDx8tCoisi8Hq',
        'remember_token' => str_random(10)
    ];
});
