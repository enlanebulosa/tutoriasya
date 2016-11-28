<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $fillable = array('nombre');

     public function users(){
     	return $this-> belongTo('App\User', 'id_usuario');
     }
}
