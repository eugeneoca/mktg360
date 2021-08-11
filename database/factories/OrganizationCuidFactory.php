<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrganizationCuid;
use Faker\Generator as Faker;

$factory->define(OrganizationCuid::class, function (Faker $faker) {
    return [
        'organization_id'=> 1,
        'cuid_alpha'=> $faker->unique()->regexify('[A-Z]{5}'),
        'cuid'=> $faker->unique()->regexify('[0-9]{5}')
    ];
});
