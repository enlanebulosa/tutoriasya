<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConsultas extends Migration
{
    public function up()
    {
        Schema::create('consultas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_materia')->unsigned();
            $table->integer('id_profesor')->unsigned();

            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_materia')->references('id')->on('materias');
            $table->foreign('id_profesor')->references('id')->on('users');

            $table->timestamps();
         });     
    }

   
    public function down()
    {
        Schema::drop('consultas'); 
    }
}
