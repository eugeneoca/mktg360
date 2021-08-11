<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LoginType;
use Faker\Generator as Faker;

$factory->define(LoginType::class, function (Faker $faker) {
    return [
        'name' => 'Mobile Internet',
        'is_mobile' => $faker->boolean,
        'is_intranet' => $faker->boolean
    ];
});
