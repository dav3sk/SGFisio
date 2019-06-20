<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAtendimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('atendimentos', function (Blueprint $table) {
            $table->bigIncrements('id')->primaryKey();
            $table->integer('guia_id')->unsigned()->nullable(false);
            $table->foreign('guia_id')->references('id')->on('guias');
            $table->string('CID');
            $table->enum('tipo_atendimento', [
                'Orto',
                'Neuro',
                'Geronto'
            ]);
            $table->integer('quantidade_sessoes');
            $table->date('inicio');
            $table->date('fim');
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
        Schema::dropIfExists('atendimentos');
    }
}
