<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReputaciontable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reputacions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_calificador')->unsigned();
            $table->integer('id_calificado')->unsigned();
            $table->string('comentario',45);
            $table->integer('puntaje');
            $table->date('fecha');
            $table->integer('id_reserva')->unsigned();
            $table->timestamps();
        });
        Schema::table('reputacions', function($table){
            $table->foreign('id_calificador')->references('id')->on('users');
            $table->foreign('id_calificado')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_reserva')->references('id')->on('reservas')->onDelete('cascade');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reputacions');
    }
}
