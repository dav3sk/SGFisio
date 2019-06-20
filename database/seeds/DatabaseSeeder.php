<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PacienteTableSeeder::class,
            PlantonistaTableSeeder::class,
            AtendimentoTableSeeder::class,
            GuiaTableSeeder::class,
            SessaoTableSeeder::class,
            UserTableSeeder::class
        ]);
    }
}
