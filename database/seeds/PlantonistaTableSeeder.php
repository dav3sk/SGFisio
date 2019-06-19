<?php

use App\Models\Plantonista;
use Illuminate\Database\Seeder;

class PlantonistaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Plantonista::class, 10)->create();
    }
}
