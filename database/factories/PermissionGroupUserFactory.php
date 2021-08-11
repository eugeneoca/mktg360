<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Model;
use App\PermissionGroupUser;
use Faker\Generator as Faker;

$factory->define(PermissionGroupUser::class, function (Faker $faker) {
    return [
        'permission_group_id' => 1,
        'organization_user_id'=>1
    ];
});
