<?php

use App\Models\Sessao;
use Illuminate\Database\Seeder;

class SessaoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Sessao::class, 5)->create();
    }
}
