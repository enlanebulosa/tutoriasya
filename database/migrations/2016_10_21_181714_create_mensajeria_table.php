<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMensajeriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mensajeria', function(Blueprint $table){
            $table ->increments('id');
            $table->string('mensaje');
            $table->date('fecha');
            $table->integer('id_emisor')->unsigned();
            $table->integer('id_receptor')->unsigned();
            $table->timestamps();
        });

        Schema::table('mensajeria', function ($table){
           $table->foreign('id_emisor')->references('id')->on('users');
           $table->foreign('id_Receptor')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('mensajeria');
    }
}
