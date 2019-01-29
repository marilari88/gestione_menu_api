<?php

use Faker\Generator as Faker;

$factory->define(Model::class, function (Faker $faker) {
    return [
        'menu_id'=>$faker->randomNumber(2),
        'dish_id'=>$faker->randomNumber(2)
    ];
});
