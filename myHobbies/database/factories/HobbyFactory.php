<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */


use Faker\Generator as Faker;

$factory->define(\App\Models\Hobby::class, function (Faker $faker) {
    return [
        'name' => $faker->realText(30),
        'description' => $faker->realText(),
    ];
});
