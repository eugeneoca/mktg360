<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Log;
use Faker\Generator as Faker;

$factory->define(Log::class, function (Faker $faker) {
    return [
        'log_source_id'=> 1,
        'log_format_id'=> 1,
        'severity' => ($faker->boolean)? "high": "low",
        'json' => $faker->sentence(5),
        'created_at'=> $faker->date('Y-m-d',now()->addDays(-20)),
        'updated_at'=> $faker->date('Y-m-d'),
    ];
});
