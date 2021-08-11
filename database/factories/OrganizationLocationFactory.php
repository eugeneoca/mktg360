<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\OrganizationLocation;
use Faker\Generator as Faker;

$factory->define(OrganizationLocation::class, function (Faker $faker) {
    return [
        'name' => $faker->unique()->company,
        'display_name' => $faker->unique()->firstName,
        'location_type_name' => $faker->streetName,
        'address1' => $faker->unique()->streetAddress,
        'address2' => $faker->streetAddress,
        'address3' => $faker->streetAddress,
        'phone' => $faker->numerify('##########'),
        'toll_free' => $faker->numerify('##########'),
        'website' => $faker->domainName,
        'fax' => $faker->numerify('##########'),
        'city' => $faker->city,
        'state' => $faker->state,
        'zip' => $faker->postcode,
        'status' => ($faker->boolean) ? "ACTIVE" : "INACTIVE",
        'intranet_ip_address_range' => $faker->ipv4 . "-" . $faker->ipv4,
        'organization_id' => 1
    ];
});
