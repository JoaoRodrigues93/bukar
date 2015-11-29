<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePerguntaTeste extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pergunta_teste', function (Blueprint $table) {
            $table->integer('pergunta_id')->unsigned();
            $table->integer('teste_id')->unsigned();
            $table->foreign('pergunta_id')->references('id')->on('perguntas')->onDelete('cascade');
            $table->foreign('teste_id')->references('id')->on('testes')->onDelete('cascade');
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
        Schema::drop('pergunta_teste');
    }
}
