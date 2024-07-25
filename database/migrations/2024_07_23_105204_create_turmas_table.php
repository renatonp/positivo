<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTurmasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turmas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('serie')->constrained( table: 'series', indexName: 'turmas_serie_id' );
            $table->foreignId('turno')->constrained( table: 'turnos', indexName: 'turmas_turno_id' );
            $table->string('nome_turma',50);
            $table->integer('qtd_vagas');
            $table->integer('ano_letivo');
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
        Schema::dropIfExists('turmas');
    }
}
