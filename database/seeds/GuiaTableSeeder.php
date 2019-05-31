<?php

use App\Models\Guia;
use Illuminate\Database\Seeder;

class GuiaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Guia::class, 3)->create();
    }
}
