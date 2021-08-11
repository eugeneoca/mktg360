<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\LogFormat;
use Faker\Generator as Faker;

$factory->define(LogFormat::class, function (Faker $faker) {
    return [
        'name' => 'Descriptive',
        'json_base' => json_encode([
            "userAgent"=> "",
            "organizationUserID"=> -1,
            "userId"=> -1,
            "userTypeID"=> -1,
            "requestData"=> [],
            "date"=> "",
            "appID"=> -1,
            "navsInstallationID"=> -1,
            "organizationID"=> -1,
            "windowsUsername"=> "",
            "ipAddress"=> "",
            "errorMessage"=> ""
        ]),
        'status' => "INACTIVE"
    ];
});
