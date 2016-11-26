<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    //
    protected $fillable = array('nombre','nivel');

    public function users(){
        return $this->belongsToMany('App\User', 'user_materia', 'id_materia','id_usuario')
                    ->withTimestamps();
    }
}
