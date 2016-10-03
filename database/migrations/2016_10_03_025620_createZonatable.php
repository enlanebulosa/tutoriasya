<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateZonatable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('zonas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('descripcion',45);
            $table->string ('partido',45);
            $table->string('localidad',45);
            $table->timestamps();
        });

        Schema::create('user_zona', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->integer('id_zona')->unsigned(); 
            
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->foreign('id_zona')->references('id')->on('zonas'); 

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('zonas');
    }
}
