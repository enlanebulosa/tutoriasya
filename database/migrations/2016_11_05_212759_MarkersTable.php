<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MarkersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('markers', function (Blueprint $table) {
          $table->increments('id')->unsigned();
          $table->integer('id_usuario')->unsigned();
          $table->string('name', 60);
          $table->string('address', 80);
          $table->float('lat',10,6);
          $table->float('lng',10,6);
          $table->string('type',30);
          $table->timestamps();
      });


      Schema::table('markers', function ($table){
         $table->foreign('id_usuario')->references('id')->on('users');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('markers');
    }
}
