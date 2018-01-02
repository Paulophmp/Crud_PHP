<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMeuModelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meu_models', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('nome', 255);
            $table->string('telefone', 255);
            $table->date('dataNascimento');
            $table->string('email', 255);
            $table->string('salario', 60);
            $table->string('cep', 20);
            $table->string('street', 60);
            $table->string('bairro', 60);
            $table->string('cidade', 60);
            $table->string('documento',255);
            $table->string('uf', 60);
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
        Schema::drop('meu_models');
    }
}
