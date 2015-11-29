<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableEscolaProfessor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('escola_professor', function (Blueprint $table) {
            $table->integer('escola_id')->unsigned();
            $table->integer('professor_id')->unsigned();
            $table->foreign('escola_id')->references('id')->on('escolas')->onDelete('cascade');
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
        Schema::drop('escola_professor');
    }
}
