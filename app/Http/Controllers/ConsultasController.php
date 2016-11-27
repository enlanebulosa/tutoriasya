<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Consulta;

class ConsultasController extends Controller
{
    //

    public function contactar($userID =null){
        $user = null;

        if($userID != null) {
            $user = User::find($userID);
            $materias=$user->materias;

        } else {
            $user = User::find(Auth::user()->id);
        }

        return view('/usuario/consulta', [
            'user' => $user,
            'materias' => $materias
        ]);



    }

    public function agregarConsulta(Request $request){
      $consulta = Consulta::create($request->all());
      return redirect('/');
    }

    public function mostrarConsultas(){
      $consultas = Auth::user()->consultasRecibidas()->paginate(5);
      return view('profesor/consultas', ['consultas' => $consultas]);
    }
}
