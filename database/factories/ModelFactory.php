<?php

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| Here you may define all of your model factories. Model factories give
| you a convenient way to create models for testing and seeding your
| database. Just tell the factory how a default model should look.
|
*/

/*$factory->define(App\User::class, function (Faker\Generator $faker) {
    static $password;

    return [
        'name' => $faker->name,
        'email' => $faker->safeEmail,
        'password' => $password ?: $password = bcrypt('secret'),
        'remember_token' => str_random(10),
    ];
});*/

$factory->define(App\User::class, function (Faker\Generator $faker) {

    return [
        'nombre' => $faker->firstName,
        'apellido' => $faker->lastName,
        'email' => $faker->email,
        'dni' => $faker->randomNumber(8),
        'tipo' => $faker->randomElement(array('profesor','alumno','administrador')),
        'password' => bcrypt(str_random(6)),

    ];
});

$factory->define(App\Zona::class, function (Faker\Generator $faker) {

    return [
        'descripcion' => $faker->city,
        'partido' => $faker->country,
        'localidad' => $faker->city,

    ];
});
