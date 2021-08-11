<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AppQuickLaunch;
use Faker\Generator as Faker;

$factory->define(AppQuickLaunch::class, function (Faker $faker) {
    return [
        'sort_order'=>$faker->randomDigitNotNull,
        'app_installation_id'=>1,
        'organization_user_id'=>1
    ];
});
