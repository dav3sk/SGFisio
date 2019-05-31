<?php

use App\Models\Paciente;
use App\Models\Guia;
use Illuminate\Database\Seeder;

class PacienteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Paciente::class, 10)
            ->create()
            ->each(function ($paciente) {
                $paciente->guias()->save(factory(Guia::class)->make());
            });
    }
}
