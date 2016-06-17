<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssociadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('associados', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('cpf')->unique();
            $table->string('rg');
            $table->date('nascimento');
            $table->string('endereco');
            $table->integer('telefone');
            $table->string('email')->unique();
            $table->enum('tipo', array('Agricultura', 'Pecuaria', 'Mista'));    
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
        Schema::drop('associados');
    }
}
