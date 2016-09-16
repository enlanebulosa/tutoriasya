<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clase extends Model
{
    //protected $table = "nombretabla";
    
    protected $fillable = array('descripcion', 'nivel');
    
    
    public function user()
    {
        return $this->belongsTo('App\User', 'id_tutor');
    }
}
