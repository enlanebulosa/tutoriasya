<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Zona extends Model
{
    //protected $table = "nombretabla";
    
    protected $fillable = array('descripcion', 'partido', 'localidad');
}
