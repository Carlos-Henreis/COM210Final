<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInsumosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('insumos', function (Blueprint $table) {
         $table->increments('id');
         $table->string('nome', 256);
         $table->text('descricao');
         $table->date('dataValidacao');
         $table->date('dataEntrada');
         $table->date('dataSolicitacao');
         $table->decimal('quantidade', 4, 0);
         $table->enum('tiposDisponiveis', ['sementes', 'defensivos agricolas', 'adubos']);
         $table->double('valorUnitario', 6, 2);
         $table->rememberToken();
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
        Schema::drop('insumos');
    }
}
