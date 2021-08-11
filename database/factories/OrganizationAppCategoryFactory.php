<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrganizationAppCategory;
use Faker\Generator as Faker;

$factory->define(OrganizationAppCategory::class, function (Faker $faker) {
    return [
        'sort_order'=>$faker->randomDigitNotNull,
        'app_category_id'=>1,
        'organization_id'=>1
    ];
});
