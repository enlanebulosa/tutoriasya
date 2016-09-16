<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    //protected $table = "nombretabla";
    
    protected $fillable = array('fecha','estado');
    
    
    public function usuario()
    {
        return $this->belongsTo('App\User', 'id_usuario');
    }
	
    public function reputacion()
    {
        return $this->hasOne('App\Reputacion', 'id_reserva');
    }
    
    public function clase()
    {
        return $this->belongsTo('App\Clase', 'id_clase');
    }
}
