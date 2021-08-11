<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Notifications;
use Faker\Generator as Faker;

$factory->define(Notifications::class, function (Faker $faker) {
    return [
        //'count'=>$faker->randomDigitNotNull,
        'app_id'=>1,
        'organization_user_id'=>1
    ];
});
