<?php

use Faker\Generator as Faker;

$factory->define(App\Dish::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'type'=>$faker->randomElement(['Primo','Secondo','Contorno','Dolce','Frutta'])
    ];
});
