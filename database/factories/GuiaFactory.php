<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Guia;
use Faker\Generator as Faker;

$factory->define(Guia::class, function (Faker $faker) {
    return [
        'data_emissao' => $faker->date(),
        'diagnostico' => $faker->text(),
        'tempo_de_lesao' => $faker->date(),
        'prioridade' => rand(1,5)
    ];
});
