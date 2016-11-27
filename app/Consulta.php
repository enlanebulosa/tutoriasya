<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    //Esto es una negrada
    protected $fillable = array('descripcion', 'id_usuario', 'id_profesor', 'id_materia');

    public function solicitante()
    {
        return $this->hasMany('App\User', 'id_usuario')->withTimestamps();
    }

    public function profesor()
    {
        return $this->hasMany('App\User', 'id_profesor')->withTimestamps();
    }

    public function materia(){
      return $this->hasMany('App\Materia', 'id_materia')->withTimestamps();
    }
}
