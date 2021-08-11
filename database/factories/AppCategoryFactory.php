<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\AppCategory;
use Faker\Generator as Faker;

$factory->define(AppCategory::class, function (Faker $faker) {

    $data =  [
        'name'=>$faker->word,
        'description'=>$faker->sentence, 
        'is_core'=>$faker->boolean,
        'sort_order'=>$faker->randomDigitNotNull
    ];
    if(!$data['is_core']){
        $data['organization_id'] = null;
    }

    return $data;
});
