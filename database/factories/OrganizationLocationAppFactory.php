<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrganizationLocationApp;
use Faker\Generator as Faker;

$factory->define(OrganizationLocationApp::class, function (Faker $faker) {
    return [
        'start_url'=>$faker->unique()->url,
        'status'=>($faker->boolean)? "ACTIVE": "INACTIVE",
        'intranet_only'=>$faker->boolean,
        'mobile'=>$faker->boolean,
        'organization_location_id'=>1,
        'organization_app_category_id'=>1,
        'app_id'=>1,
        'is_quick_launch'=> $faker->boolean
    ];
});
