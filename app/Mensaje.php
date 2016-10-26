<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mensaje extends Model
{
    protected $fillable = array ('fecha', 'mensaje');

    public function useremisor(){
    	return $this->belongsTo('App\User', 'id_emisor');
    }
    public function userreceptor(){
    	return $this->belongsTo('App\User', 'id_receptor');
    }

}
