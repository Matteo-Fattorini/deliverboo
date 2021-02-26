<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Restaurant;
use App\Restaurateur;
use Faker\Generator as Faker;

$factory->define(Restaurant::class, function (Faker $faker) {
    static $num = 1;
    return [
        'name' => $faker->name,
        'address' => $faker->word(),
        'p_iva' => $faker->word(),
        'restaurateur_id' => $num ++,
        'image_url' => $faker->word(),
        

    ];
});
