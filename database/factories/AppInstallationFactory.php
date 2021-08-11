<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AppInstallation;
use Faker\Generator as Faker;

$factory->define(AppInstallation::class, function (Faker $faker) {
    return [
        'organization_location_app_id'=>1
    ];
});
