<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Raspberry;
use App\Estado;
use Faker\Generator as Faker;

$factory->define(Raspberry::class, function (Faker $faker) {
    return [
        'ESTADO'    =>  Estado::inRandomOrder()->value('ESTADO')
    ];
});
