<?php

use App\Models\Guia;
use App\Models\Atendimento;
use Illuminate\Database\Seeder;

class AtendimentoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Atendimento::class, 5)->create();
    }
}
