<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    //protected $table = "nombretabla";
    
    protected $fillable = array('descripcion', 'partido', 'localidad');
    
    public function users(){
        return $this->belongsToMany('App\User', 'user_zona', 'id_zona')->withTimestamps();
    }
}
