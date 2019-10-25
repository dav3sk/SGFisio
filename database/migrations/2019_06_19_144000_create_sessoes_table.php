<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSessoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sessaos', function (Blueprint $table) {
            $table->bigIncrements('id')->primaryKey();
            $table->unsignedBigInteger('atendimento_id')->nullable();
            $table->foreign('atendimento_id')->references('id')->on('atendimentos');
            $table->bigInteger('plantonista_id')->unsigned()->nullable();
            $table->foreign('plantonista_id')->references('id')->on('plantonistas');
            $table->date('data');
            $table->time('horario');
            $table->text('evolucao');
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
        Schema::dropIfExists('sessaos');
    }
}
