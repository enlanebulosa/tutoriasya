<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DisponibilidadTutor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disponibilidad', function(Blueprint $table){
        	$table -> increments('id');
        	$table -> string('Dia');
        	$table -> time('Hora_de_inicio');
        	$table -> time('Hora_de_fin');
        	$table -> integer ('recurrente')->default(0);
        	$table -> date('Fecha');
        	$table -> integer ('id_user')-> unsigned();
        });

        Schema::table('disponibilidad', function (Blueprint $table){
        	$table-> foreign('id_user')->references('id')->on ('users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('disponibilidad');
    }
}
