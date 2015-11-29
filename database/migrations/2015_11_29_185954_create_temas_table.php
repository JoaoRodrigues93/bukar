<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('temas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo_conteudo');
            $table->longText('texto');
            $table->binary('texto_html');
            $table->integer('capitulo_id')->unsigned();
            $table->foreign('capitulo_id')->references('id')->on('capitulos')->onDelete('cascade');
            $table->timestamps();
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
        Schema::drop('temas');
    }
}
