<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Marker extends Model
{
    //
    protected $fillable = array('name', 'address', 'lat', 'lng', 'type');

    public function usuario()
    {
        return $this->belongsTo('App\User', 'id_usuario');
    }
}
