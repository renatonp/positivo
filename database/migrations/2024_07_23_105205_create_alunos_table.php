<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->foreignId('serie')->constrained( table: 'series', indexName: 'alunos_serie_id' );
            $table->foreignId('segmento')->constrained( table: 'segmentos', indexName: 'alunos_segmento_id' );
            $table->string('tipo_endereco');
            $table->string('rua',50);
            $table->string('cep',9);
            $table->integer('numero');
            $table->string('complemento',50);
            $table->integer('matricula');
            $table->string('nome_completo',50);
            $table->date('data_nascimento');
            $table->string('nome_pai',50);
            $table->string('nome_mae',50);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('alunos');
    }
};
