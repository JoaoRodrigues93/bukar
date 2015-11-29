<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('referencia');
            $table->integer('ano_lectivo');
            $table->integer('classe_id')->unsiged();
            $table->foreign('classe_id')->references('id')->on('classes')->onDelete('cascade');
            $table->integer('escola_id')->unsiged();
            $table->foreign('escola_id')->references('id')->on('escolas')->onDelete('cascade');
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
        Schema::drop('turmas');
    }
}
