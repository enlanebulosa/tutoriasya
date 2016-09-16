<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClasetable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clases', function (Blueprint $table){
            $table->increments('id');
            $table->integer('id_tutor')->unsigned();
            $table->string('descripcion',45);
            $table->string('nivel',45);
            $table->timestamps();
        });
        Schema::table('clases', function($table){
            $table->foreign('id_tutor')->references('id')->on('users')->onDelete('cascade');
        });
        
        Schema::table('reservas', function($table){
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('id_clase')->references('id')->on('clases')->onDelete('cascade');
        });
        
        Schema::table('domicilios', function($table){
            $table->foreign('id_usuario')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('clases');
    }
}
