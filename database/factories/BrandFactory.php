<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Brand;
use Faker\Generator as Faker;

$factory->define(Brand::class, function (Faker $faker) {
    return [
        'brand_name'=>$faker->word,
        'brand_desc'=>$faker->paragraph,
        'brand_image'=>$faker->imageUrl,
        'status'=>$faker->numberBetween(0,1)
    ];
});
