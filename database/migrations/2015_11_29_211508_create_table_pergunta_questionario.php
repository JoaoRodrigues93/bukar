<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePerguntaQuestionario extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pergunta_questionario', function (Blueprint $table) {
            $table->integer('pergunta_id')->unsigned();
            $table->integer('questionario_id')->unsigned();
            $table->foreign('pergunta_id')->references('id')->on('perguntas')->onDelete('cascade');
            $table->foreign('questionario_id')->references('id')->on('questionarios')->onDelete('cascade');
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
        Schema::drop('pergunta_questionario');
    }
}
