<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Administrador;
use Faker\Generator as Faker;

$factory->define(Administrador::class, function (Faker $faker) {
    return [
        'nombre'        =>  $faker  -> firstName,
        'apellido'      =>  $faker  -> lastName,
        'correo'        =>  $faker  -> email, 
        'contrasena'    =>  $faker  -> randomNumber($nbDigits = 4),  
        'direccion'     =>  $faker  -> streetAddress   
    ];
});
