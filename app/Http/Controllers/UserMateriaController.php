<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Materia;
use DB;

class UserMateriaController extends Controller
{
    public function index(){
        $users=User::has('materias')->paginate(10);
        return view('paginacionum',['users'=>$users]);
    	}

    public function nuevaTutoria(Request $request){
        $user=User::find($request->id_usuario);
        $user->materias()->attach($request->materia);
    	return redirect('/');

    }
    public function getUpdate(Request $request){
    	if ($request->ajax())
    	{
    		$materia=User::find($request->id)->materias->find($request->id_materia);
    		return Response($materia);
    		}
    	}

    public function newUpdate(Request $request){
    	if ($request->ajax()) {
    		$user=User::find($request->id_usuario);
    		$user->materias()->attach($request->id_materia);
    		}
    	}
    public function deleteUser(Request $request){
    	if ($request->ajax())
    	{
    		$user=User::find($request->id_usuario);
                $user->materias()->detach($request->id_materia);
    		return Response()->json(['sms'=>'Relacion eliminada correctamente']);
    		}
    	}

    public function mostrarFormulario()
    {
        $materias = Materia::all();
        return view('usuario/nuevatutoria', ['materias' => $materias]);

    }
    public function mostrarFormularioPorMaterias()
    {
        $materias = Materia::all();
        return view('filtros/filtromateria', ['materias' => $materias]);

    }

    public function listarPorMaterias(Request $request){
      $profesores=Materia::find($request->id_materia)->users()->paginate(5);
      return view('filtros/profesores')->with('users',$profesores);
    }
}
