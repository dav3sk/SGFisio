<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Diretor',
            'email' => 'diretor@clinica.com',
            'password' => Hash::make('senha123')
        ]);
    }
}
