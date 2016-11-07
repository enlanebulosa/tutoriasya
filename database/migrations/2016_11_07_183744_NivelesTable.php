<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NivelesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Niveles', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->integer('id_materia')->unsigned();
            $table->timestamps();
        });

         Schema::table('Niveles', function ($table){
           $table->foreign('id_materia')->references('id')->on('materias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Niveles');
    }
}
