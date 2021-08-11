<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\PermissionGroupApp;
use Faker\Generator as Faker;

$factory->define(PermissionGroupApp::class, function (Faker $faker) {
    return [
        'permission_group_id' => 1,
        'organization_location_app_id'=>1
    ];
});
