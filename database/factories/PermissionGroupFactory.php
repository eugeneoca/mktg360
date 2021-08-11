<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\PermissionGroup;
use Faker\Generator as Faker;

$factory->define(PermissionGroup::class, function (Faker $faker) {
    return [
        'name' => $faker->name(),
        'organization_location_id' => 1,
        'system_created'=> false,
    ];
});
