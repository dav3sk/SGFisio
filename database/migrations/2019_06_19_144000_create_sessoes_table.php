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
            $table->integer('atendimento_id')->unsigned()->nullable();
            $table->foreign('atendimento_id')->references('id')->on('atendimento');
            $table->integer('plantonista_id')->unsigned()->nullable();
            $table->foreign('plantonista_id')->references('id')->on('plantonista');
            $table->dateTime('data_hora');
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
