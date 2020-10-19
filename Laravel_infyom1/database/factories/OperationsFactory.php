<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Operations;
use Faker\Generator as Faker;

$factory->define(Operations::class, function (Faker $faker) {

    return [
        'numoperation' => $faker->randomDigitNotNull,
        'typeoperation' => $faker->randomDigitNotNull,
        'dateoperation' => $faker->word,
        'montantoperation' => $faker->word,
        'etats' => $faker->word,
        'agence' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
