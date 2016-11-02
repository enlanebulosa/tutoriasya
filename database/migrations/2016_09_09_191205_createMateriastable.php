<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriastable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 45);
            $table->enum('tipo',['Universitario','Secundario','Primario']);
            $table->timestamps();
        });

        Schema::create('user_materia', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_materia')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_materia')->references('id')->on('materias');

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
        Schema::drop('materias');
    }
}
