<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */
use App\Models\Plantonista;
use Illuminate\Support\Str;
use Faker\Generator as Faker;

/*
|--------------------------------------------------------------------------
| Model Factories
|--------------------------------------------------------------------------
|
| This directory should contain each of the model factory definitions for
| your application. Factories provide a convenient way to generate new
| model instances for testing / seeding your application's database.
|
*/

$factory->define(Plantonista::class, function (Faker $faker) {
    return [
        'nome' => $faker->name,
        'email' => $faker->email,
        'sexo' => 'masculino',
        'crefito' => $faker->numberBetween(999999999),
        'data_nascimento' => $faker->date(),
        'cpf' => $faker->numberBetween(999999999),
        'cidade' => $faker->city(),
        'estado' => $faker->state(),
        'telefone' => $faker->numberBetween(99999999999)
    ];
});
