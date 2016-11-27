<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consulta extends Model
{
    //Esto es una negrada
    protected $fillable = array('descripcion', 'id_usuario', 'id_profesor', 'id_materia');

    public function solicitante()
    {
        return $this->belongsTo('App\User', 'id_usuario');
    }

    public function profesor()
    {
        return $this->belongsTo('App\User', 'id_profesor');
    }

    public function materia(){
      return $this->belongsTo('App\Materia', 'id_materia');
    }
}
