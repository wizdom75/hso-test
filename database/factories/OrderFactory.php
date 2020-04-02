<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Order;
use Faker\Generator as Faker;

$factory->define(Order::class, function (Faker $faker) {
    return [
        'account_id' => $faker->account_id,
        'product_id' => $faker->product_id,
        'quantity' => $faker->quantity,
        'cost' => $faker->cost,
    ];
});
