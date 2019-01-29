<?php

use Faker\Generator as Faker;

$factory->define(\App\Menu::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'price'=>$faker->randomFloat(2,0,100),
        'year'=>$faker->year,
        'description'=>$faker->realText(50),
        'recurrence_id'=>$faker->randomNumber(2)
    ];
});
