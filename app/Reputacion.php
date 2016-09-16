<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reputacion extends Model
{
    //
    protected $fillable = array('comentario','puntaje','fecha');
    
    public function usercalificado()
    {
        return $this->belongsTo('App\User', 'id_calificado');
    }
    
    public function usercalificador()
    {
        return $this->belongsTo('App\User', 'id_calificador');
    }
	
    public function reserva()
    {
        return $this->belongsTo('App\Reserva', 'id_reserva');
    }
}
