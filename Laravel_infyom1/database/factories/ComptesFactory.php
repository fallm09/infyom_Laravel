<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Models\Comptes;
use Faker\Generator as Faker;

$factory->define(Comptes::class, function (Faker $faker) {

    return [
        'operations_id' => $faker->randomDigitNotNull,
        'accountnumber' => $faker->word,
        'clerib' => $faker->randomDigitNotNull,
        'typecompte' => $faker->randomDigitNotNull,
        'solde' => $faker->word,
        'datecreation' => $faker->word,
        'created_at' => $faker->date('Y-m-d H:i:s'),
        'updated_at' => $faker->date('Y-m-d H:i:s'),
        'deleted_at' => $faker->date('Y-m-d H:i:s')
    ];
});
