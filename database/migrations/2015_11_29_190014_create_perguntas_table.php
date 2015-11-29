<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerguntasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perguntas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('opcaoCorrecta_texto');
            $table->string('opcao1_texto');
            $table->string('opcao2_texto');
            $table->string('opcao3_texto');
            $table->string('opcao4_texto');
            $table->integer('tema_id')->unsigned();
            $table->foreign('tema_id')->references('id')->on('temas')->onDelete('cascade');
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
        Schema::drop('perguntas');
    }
}
