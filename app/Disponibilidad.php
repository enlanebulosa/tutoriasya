<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disponibilidad extends Model
{
    protected $fillable=array('Dia','Hora_de_inicio','Hora_de_fin','recurrente','Fecha');

    public function usuario(){
    	return $this->belongsTo('App\User','id_user');
    }
}
