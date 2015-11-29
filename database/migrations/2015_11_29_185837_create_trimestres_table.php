<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTrimestresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trimestres', function (Blueprint $table) {
            $table->increments('id');
            $table->date('inicio');
            $table->date('fim');
            $table->integer('turma_id')->unsiged();
            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');
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
        Schema::drop('trimestres');
    }
}
