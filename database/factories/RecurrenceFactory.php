<?php

use Faker\Generator as Faker;

$factory->define(\App\Recurrence::class, function (Faker $faker) {
    return [
        'name'=>$faker->word,
        'date'=>$faker->date()
    ];
});
