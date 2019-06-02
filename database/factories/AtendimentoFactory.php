<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Guia;
use App\Models\Atendimento;
use Faker\Generator as Faker;

$factory->define(Atendimento::class, function (Faker $faker) {
    return [
        'guia_id' => Guia::inRandomOrder()->get()->first()->id,
        'CID' => $faker->numberBetween(999),
        'tipo_atendimento' => 'Neuro',
        'quantidade_sessoes' => rand(10, 20),
        'inicio' => $faker->date(),
        'fim' => $faker->date()
    ];
});
