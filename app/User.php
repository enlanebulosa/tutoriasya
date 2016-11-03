<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Auth\Authenticatable;

class User extends Model implements AuthenticatableContract
{
    use Authenticatable;
    //protected $table = "nombretabla";

    protected $fillable = array('nombre','apellido','email', 'dni', 'tipo', 'password','avatar', 'verified', 'verification_token');


    public function reserva()
    {
        return $this->hasMany('App\Reserva', 'id_usuario');
    }


    public function domicilios()
    {
        return $this->hasMany('App\Domicilio', 'id_usuario');
    }

    public function clase()
    {
        return $this->hasMany('App\Clase', 'id_tutor');
    }

    public function reputacion()
    {
        return $this->hasMany('App\Reputacion', 'id_calificado');
    }

    public function reputaciondada()
    {
        return $this->hasMany('App\Reputacion', 'id_calificador');
    }

    public function materias(){
        return $this->belongsToMany('App\Materia', 'user_materia', 'id_usuario', 'id_materia')
                ->withTimestamps();
    }

    public function zonas(){
        return $this->belongsToMany('App\Zona', 'user_zona', 'id_usuario')
                ->withTimestamps();
    }
	public function mensaje()
    {
        return $this->hasMany('App\Mensaje', 'id_emisor');
    }
    	public function mensajedada()
    {
        return $this->hasMany('App\Mensaje', 'id_receptor');
    }
    public function scopeName($query, $name)
    {
        if ($name !=""){
                    #$query->where('nombre', $name);
                    $query->where(\DB::raw("CONCAT(nombre)"), "LIKE", "%$name%");
        }
    }
    public function scopeApellido($query, $apellido)
    {
        if ($apellido !=""){
                    #$query->where('nombre', $name);
                    $query->where(\DB::raw("CONCAT(apellido)"), "LIKE", "%$apellido%");
        }
    }
      public function scopeEmail($query, $email)
    {
        if ($email !=""){
                    #$query->where('nombre', $name);
                    $query->where(\DB::raw("CONCAT(email)"), "LIKE", "%$email%");
        }
    }

    public function scopeTipo($query, $tipo)
    {

    if($tipo != "" && isset($tipo[$tipo]))
        {
        $query->where('tipo,$tipo');
        }
    }
}

