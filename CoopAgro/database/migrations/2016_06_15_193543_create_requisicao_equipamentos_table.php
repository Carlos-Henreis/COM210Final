<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRequisicaoEquipamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('requisicao_equipamentos', function (Blueprint $table)
        {
            $table->increments('id');
            $table->string('idmaquina');
            $table->string('cpf');
            $table->string('tipo');
            $table->string('servico');
            $table->string('associado');
            $table->string('local');
            $table->date('datainicio');
            $table->string('horainicio');
            $table->string('tempo');
            $table->date('datafim');
            $table->double('valor');
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
        Schema::drop('requisicao_equipamentos');
    }
}
