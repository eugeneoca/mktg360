<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LogSource;
use Faker\Generator as Faker;

$factory->define(LogSource::class, function (Faker $faker) {
    return [
        'name' => 'Hardware',
    ];
});