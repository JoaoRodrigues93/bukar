<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTestesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('testes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nr_perguntas')->unsigned();
            $table->date('data_criacao');
            $table->date('data_realizaco');
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
        Schema::drop('testes');
    }
}
