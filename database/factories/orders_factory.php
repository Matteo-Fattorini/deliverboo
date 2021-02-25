<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        "total" => strval($faker->numberBetween(5,1000)),
        "is_payed"=> $faker->numberBetween(0, 1),
        "client_name" => $faker->firstName(),
        "client_surname"=>$faker->lastName(),
        "client_email" => $faker->safeEmail(),
        "client_phone"=>$faker->phoneNumber(),
        "client_address" => $faker->address(),

    ];
});
