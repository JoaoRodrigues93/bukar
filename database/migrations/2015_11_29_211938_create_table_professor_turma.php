<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableProfessorTurma extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('professor_turma', function (Blueprint $table) {
            $table->integer('turma_id')->unsigned();
            $table->integer('professor_id')->unsigned();
            $table->foreign('turma_id')->references('id')->on('turmas')->onDelete('cascade');
            $table->foreign('professor_id')->references('id')->on('professors')->onDelete('cascade');
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
        Schema::drop('professor_turma');
    }
}
