<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nivel extends Model
{
    protected $fillable = array('nombre');

     public function users(){
     	return $this-> belongTo('App\Materia', 'id_materia');
}
