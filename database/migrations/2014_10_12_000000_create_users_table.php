<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 45);
            $table->string('apellido', 45);
            $table->integer('dni')->unique();
            $table->string('email', 45)->unique();
            $table->string('password', 120);
            $table->enum('tipo',['profesor','administrador','alumno'])->default('alumno');
            $table->string('avatar', 45)->default('default.PNG');
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
