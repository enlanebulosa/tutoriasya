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
        $id_materia=Materia::where('nombre',$request->materia)->where('nivel',$request->nivel)->first()->id;
        $user->materias()->attach($id_materia);
    	return redirect('/');
    	}

    public function ingresarEnTutoria(Request $request)
    {
        $user=User::find($request->id_usuario);
        $id_materia=Materia::where('nombre',$request->materia)->where('tipo',$request->tipo)->first()->id;
        $user->materias()->attach($id_materia);
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
}
