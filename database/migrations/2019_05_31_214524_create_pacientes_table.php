<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePacientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->bigIncrements('id')->primaryKey();
            $table->string('nome');
            $table->enum('sexo', [
                'masculino',
                'feminino'
            ]);

            $table->date('data_nascimento');
            $table->string('cpf', 11)->unique();
            $table->string('cidade');
            $table->string('estado');
            $table->string('telefone');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientes');
    }
}
