<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Session;
use Faker\Generator as Faker;

$factory->define(Session::class, function (Faker $faker) {
    return [
        'key'=>$faker->unique()->uuid,
        'ip_address'=>$faker->unique()->ipv4,
        'start_date'=>$faker->unique()->dateTime(),
        'end_date'=>$faker->unique()->dateTime(),
        'navs_installation_id'=>1,
        'user_id'=>1,
        'login_type_id'=>1
    ];
});
