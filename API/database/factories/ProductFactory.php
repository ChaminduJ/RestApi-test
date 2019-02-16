<?php

use Faker\Generator as Faker;

$factory->define(App\Products::class, function (Faker $faker) {
    return [
        'product'       => $faker->sentence(),
        'taxrate' => $faker->amount(),
    ];
});
