<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Organization;
use Faker\Generator as Faker;

$factory->define(Organization::class, function (Faker $faker) {
    return [
        'name'=>$faker->unique()->word,
        'dns_key'=>$faker->unique()->ean8 .'.navsnow.com',
        'status'=>($faker->boolean)? "ACTIVE": "INACTIVE",
        'logo'=>$faker->imageUrl($width = 200, $height = 200),
        'icon'=>$faker->imageUrl($width = 60, $height = 60)
    ];
});
