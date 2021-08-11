<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrganizationUser;
use Faker\Generator as Faker;

$factory->define(OrganizationUser::class, function (Faker $faker) {
    return [
        "display_name" => $faker->unique()->firstName,
        "profile_photo" => $faker->imageUrl($width = 200, $height = 200),
        "title" => $faker->title,
        "status" => ($faker->boolean) ? "ACTIVE" : "ACTIVE",
        "windows_username" => $faker->unique()->userName,
        "user_id" => 1,
        'user_type_id'=> 1,
        "organization_id" => 1,
    ];
});
