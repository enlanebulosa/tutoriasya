<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Domicilio extends Model
{
    //protected $table = "domicilio";
    
    protected $fillable = array('calle', 'numero', 'zona', 'id_codigopostal');
    
	
    public function usuario()
    {
        return $this->belongsTo('App\User', 'id_usuario');
    }
}
