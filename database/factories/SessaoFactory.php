<?php

/* @var $factory \Illuminate\Database\Eloquent\Factory */

use App\Models\Sessao;
use App\Models\Atendimento;
use App\Models\Plantonista;
use Faker\Generator as Faker;

$factory->define(Sessao::class, function (Faker $faker) {
    return [
        'atendimento_id' => Atendimento::inRandomOrder()->get()->first()->id,
        'plantonista_id' => Plantonista::inRandomOrder()->get()->first()->id,
        'data' => $faker->date(),
        'horario' => $faker->time(),
        'evolucao' => $faker->sentence(6)
    ];
});
