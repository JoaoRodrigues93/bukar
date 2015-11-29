<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdministradorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('administradors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('apelido');
            $table->string('avatar');
            $table->string('username');
            $table->string('password');
            $table->integer('user_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::drop('administradors');
    }
}
